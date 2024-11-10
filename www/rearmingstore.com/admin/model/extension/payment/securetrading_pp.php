<?php
class ModelExtensionPaymentSecureTradingPp extends Model {
    public function install(): void {
        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "securetrading_pp_order` (
			  `securetrading_pp_order_id` INT(11) NOT NULL AUTO_INCREMENT,
			  `order_id` INT(11) NOT NULL,
			  `transaction_reference` varchar(127) DEFAULT NULL,
			  `created` DATETIME NOT NULL,
			  `modified` DATETIME NOT NULL,
			  `release_status` INT(1) DEFAULT NULL,
			  `void_status` INT(1) DEFAULT NULL,
			  `settle_type` INT(1) DEFAULT NULL,
			  `rebate_status` INT(1) DEFAULT NULL,
			  `currency_code` CHAR(3) NOT NULL,
			  `total` DECIMAL( 10, 2 ) NOT NULL,
			  PRIMARY KEY (`securetrading_pp_order_id`)
			) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "securetrading_pp_order_transaction` (
			  `securetrading_pp_order_transaction_id` INT(11) NOT NULL AUTO_INCREMENT,
			  `securetrading_pp_order_id` INT(11) NOT NULL,
			  `created` DATETIME NOT NULL,
			  `type` ENUM('auth', 'payment', 'rebate', 'reversed') DEFAULT NULL,
			  `amount` DECIMAL( 10, 2 ) NOT NULL,
			  PRIMARY KEY (`securetrading_pp_order_transaction_id`)
			) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;");
    }

    public function uninstall(): void {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "securetrading_pp_order`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "securetrading_pp_order_transaction`;");
    }

    public function void($order_id) {
        $securetrading_pp_order = $this->getOrder($order_id);

        if ($securetrading_pp_order && $securetrading_pp_order['release_status'] == 0) {
            $requestblock_xml = new \SimpleXMLElement('<requestblock></requestblock>');
            $requestblock_xml->addAttribute('version', '3.67');
            $requestblock_xml->addChild('alias', $this->config->get('payment_securetrading_pp_webservice_username'));

            $request_node = $requestblock_xml->addChild('request');
            $request_node->addAttribute('type', 'TRANSACTIONUPDATE');

            $filter_node = $request_node->addChild('filter');
            $filter_node->addChild('sitereference', $this->config->get('payment_securetrading_pp_site_reference'));
            $filter_node->addChild('transactionreference', $securetrading_pp_order['transaction_reference']);

            $request_node->addChild('updates')->addChild('settlement')->addChild('settlestatus', 3);

            return $this->call($requestblock_xml->asXML());
        } else {
            return false;
        }
    }

    public function updateVoidStatus(int $securetrading_pp_order_id, int $status): void {
        $this->db->query("UPDATE `" . DB_PREFIX . "securetrading_pp_order` SET `void_status` = '" . (int)$status . "' WHERE `securetrading_pp_order_id` = '" . (int)$securetrading_pp_order_id . "'");
    }

    public function release($order_id, $amount) {
        $securetrading_pp_order = $this->getOrder($order_id);
        $total_released = $this->getTotalReleased($securetrading_pp_order['securetrading_pp_order_id']);

        if ($securetrading_pp_order && $securetrading_pp_order['release_status'] == 0 && $total_released <= $amount) {
            $requestblock_xml = new \SimpleXMLElement('<requestblock></requestblock>');

            $requestblock_xml->addAttribute('version', '3.67');
            $requestblock_xml->addChild('alias', $this->config->get('payment_securetrading_pp_webservice_username'));

            $request_node = $requestblock_xml->addChild('request');
            $request_node->addAttribute('type', 'TRANSACTIONUPDATE');

            $filter_node = $request_node->addChild('filter');
            $filter_node->addChild('sitereference', $this->config->get('payment_securetrading_pp_site_reference'));
            $filter_node->addChild('transactionreference', $securetrading_pp_order['transaction_reference']);

            $settlement_node = $request_node->addChild('updates')->addChild('settlement');
            $settlement_node->addChild('settlestatus', 0);
            $settlement_node->addChild('settlemainamount', $amount)->addAttribute('currencycode', $securetrading_pp_order['currency_code']);

            return $this->call($requestblock_xml->asXML());
        } else {
            return false;
        }
    }

    public function updateReleaseStatus(int $securetrading_pp_order_id, int $status): void {
        $this->db->query("UPDATE `" . DB_PREFIX . "securetrading_pp_order` SET `release_status` = '" . (int)$status . "' WHERE `securetrading_pp_order_id` = '" . (int)$securetrading_pp_order_id . "'");
    }

    public function updateForRebate(int $securetrading_pp_order_id, string $order_ref): void {
        $this->db->query("UPDATE `" . DB_PREFIX . "securetrading_pp_order` SET `order_ref_previous` = '_multisettle_" . $this->db->escape($order_ref) . "' WHERE `securetrading_pp_order_id` = '" . (int)$securetrading_pp_order_id . "' LIMIT 1");
    }

    public function rebate($order_id, $refunded_amount) {
        $securetrading_pp_order = $this->getOrder($order_id);

        if ($securetrading_pp_order && $securetrading_pp_order['rebate_status'] != 1) {
            $requestblock_xml = new \SimpleXMLElement('<requestblock></requestblock>');

            $requestblock_xml->addAttribute('version', '3.67');
            $requestblock_xml->addChild('alias', $this->config->get('payment_securetrading_pp_webservice_username'));

            $request_node = $requestblock_xml->addChild('request');
            $request_node->addAttribute('type', 'REFUND');

            $request_node->addChild('merchant')->addChild('orderreference', $order_id);

            $operation_node = $request_node->addChild('operation');
            $operation_node->addChild('accounttypedescription', 'ECOM');
            $operation_node->addChild('parenttransactionreference', $securetrading_pp_order['transaction_reference']);
            $operation_node->addChild('sitereference', $this->config->get('payment_securetrading_pp_site_reference'));

            $billing_node = $request_node->addChild('billing');
            $billing_node->addAttribute('currencycode', $securetrading_pp_order['currency_code']);
            $billing_node->addChild('amount', str_replace('.', '', $refunded_amount));

            return $this->call($requestblock_xml->asXML());
        } else {
            return false;
        }
    }

    public function getOrder(int $order_id): array {
        $qry = $this->db->query("SELECT * FROM `" . DB_PREFIX . "securetrading_pp_order` WHERE `order_id` = '" . (int)$order_id . "' LIMIT 1");

        if ($qry->num_rows) {
            $order = $qry->row;

            $order['transactions'] = $this->getTransactions($order['securetrading_pp_order_id']);

            return $order;
        } else {
            return [];
        }
    }

    private function getTransactions(int $securetrading_pp_order_id): array {
        $qry = $this->db->query("SELECT * FROM `" . DB_PREFIX . "securetrading_pp_order_transaction` WHERE `securetrading_pp_order_id` = '" . (int)$securetrading_pp_order_id . "'");

        if ($qry->num_rows) {
            return $qry->rows;
        } else {
            return [];
        }
    }

    public function addTransaction(int $securetrading_pp_order_id, string $type, float $total): void {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "securetrading_pp_order_transaction` SET `securetrading_pp_order_id` = '" . (int)$securetrading_pp_order_id . "', `created` = NOW(), `type` = '" . $this->db->escape($type) . "', `amount` = '" . (double)$total . "'");
    }

    public function getTotalReleased(int $securetrading_pp_order_id): float {
        $query = $this->db->query("SELECT SUM(`amount`) AS `total` FROM `" . DB_PREFIX . "securetrading_pp_order_transaction` WHERE `securetrading_pp_order_id` = '" . (int)$securetrading_pp_order_id . "' AND (`type` = 'payment' OR `type` = 'rebate')");

        return (float)$query->row['total'];
    }

    public function getTotalRebated(int $securetrading_pp_order_id): float {
        $query = $this->db->query("SELECT SUM(`amount`) AS `total` FROM `" . DB_PREFIX . "securetrading_pp_order_transaction` WHERE `securetrading_pp_order_id` = '" . (int)$securetrading_pp_order_id . "' AND `type` = 'rebate'");

        return (float)$query->row['total'];
    }

    public function increaseRefundedAmount(int $order_id, float $amount): void {
        $this->db->query("UPDATE `" . DB_PREFIX . "securetrading_pp_order` SET `refunded` = (`refunded` + " . (double)$amount . ") WHERE `order_id` = '" . (int)$order_id . "'");
    }

    public function call($data) {
        $ch = curl_init();

        $defaults = [
            CURLOPT_POST           => 1,
            CURLOPT_HEADER         => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_URL            => 'https://webservices.securetrading.net/xml/',
            CURLOPT_FRESH_CONNECT  => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FORBID_REUSE   => 1,
            CURLOPT_TIMEOUT        => 15,
            CURLOPT_HTTPHEADER     => [
                'User-Agent: OpenCart - Secure Trading PP',
                'Content-Length: ' . strlen($data),
                'Authorization: Basic ' . base64_encode($this->config->get('payment_securetrading_pp_webservice_username') . ':' . $this->config->get('payment_securetrading_pp_webservice_password'))
            ],
            CURLOPT_POSTFIELDS     => $data
        ];

        curl_setopt_array($ch, $defaults);

        $response = curl_exec($ch);

        if ($response === false) {
            $this->log->write('Secure Trading PP CURL Error: (' . curl_errno($ch) . ') ' . curl_error($ch));
        }

        curl_close($ch);

        return $response;
    }

    public function logger(string $message): void {
        $log = new \Log('securetrading_pp.log');
        $log->write($message);
    }
}
