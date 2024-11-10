<?php
class ModelCheckoutOrder extends Model {
    public function addOrder(array $data): int {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "order` SET `invoice_prefix` = '" . $this->db->escape($data['invoice_prefix']) . "', `store_id` = '" . (int)$data['store_id'] . "', `store_name` = '" . $this->db->escape($data['store_name']) . "', `store_url` = '" . $this->db->escape($data['store_url']) . "', `customer_id` = '" . (int)$data['customer_id'] . "', `customer_group_id` = '" . (int)$data['customer_group_id'] . "', `firstname` = '" . $this->db->escape($data['firstname'] ?? " ") . "', `lastname` = '" . $this->db->escape($data['lastname'] ?? " ") . 
		"', `email` = '" . $this->db->escape($data['email']) . "',".
		" `skype` = '" . $this->db->escape($data['skype'] ?? '') . "',".
		" `discord` = '" . $this->db->escape($data['discord'] ?? '') . "',".
		" `nickname` = '" . $this->db->escape($data['nickname']) . "',".
		" `server` = '" . $this->db->escape($data['server']) . "',".
		" `battletag` = '" . $this->db->escape($data['battletag'] ?? '') . "',
						 `total` = '" . (float)$data['total'] . "', 
						 `affiliate_id` = '" . (int)$data['affiliate_id'] . "', 
						 `commission` = '" . (float)$data['commission'] . "', 
						 `marketing_id` = '" . (int)$data['marketing_id'] . "', 
						 `tracking` = '" . $this->db->escape($data['tracking']) . "', 
						 `language_id` = '" . (int)$data['language_id'] . "', 
						 `currency_id` = '" . (int)$data['currency_id'] . "', 
						 `currency_code` = '" . $this->db->escape($data['currency_code']) . "', 
						 `currency_value` = '" . (float)$data['currency_value'] . "', 
						 `ip` = '" . $this->db->escape($data['ip']) . "', `forwarded_ip` = '" . $this->db->escape($data['forwarded_ip']) . "', 
						 `user_agent` = '" . $this->db->escape($data['user_agent']) . "', 
						 `accept_language` = '" . $this->db->escape($data['accept_language']) . "', 
						 `date_added` = NOW(), 
						 `date_modified` = NOW()");

        $order_id = $this->db->getLastId();

        // Subscription
        $this->load->model('checkout/subscription');

        // Products
        if (isset($data['products'])) {
            foreach ($data['products'] as $product) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "order_product` SET `order_id` = '" . (int)$order_id . "', `product_id` = '" . (int)$product['product_id'] . "', `name` = '" . $this->db->escape($product['name']) . "', `model` = '" . $this->db->escape($product['model']) . "', `quantity` = '" . (int)$product['quantity'] . "', `price` = '" . (float)$product['price'] . "', `total` = '" . (float)$product['total'] . "', `tax` = '" . (float)$product['tax'] . "', `reward` = '" . (int)$product['reward'] . "'");

                $order_product_id = $this->db->getLastId();

                foreach ($product['option'] as $option) {
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "order_option` SET `order_id` = '" . (int)$order_id . "', `order_product_id` = '" . (int)$order_product_id . "', `product_option_id` = '" . (int)$option['product_option_id'] . "', `product_option_value_id` = '" . (int)$option['product_option_value_id'] . "', `name` = '" . $this->db->escape($option['name']) . "', `value` = '" . $this->db->escape($option['value']) . "', `type` = '" . $this->db->escape($option['type']) . "'");
                }

                if ($product['subscription']) {
					// If subscription add details
					if ($product['subscription']) {
						$this->db->query("INSERT INTO `" . DB_PREFIX . "order_subscription` SET `order_id` = '" . (int)$order_id . "', `order_product_id` = '" . (int)$order_product_id . "', `subscription_plan_id` = '" . (int)$product['subscription']['subscription_plan_id'] . "', `trial_price` = '" . (float)$product['subscription']['trial_price'] . "', `trial_tax` = '" . (float)$product['subscription']['trial_tax'] . "', `trial_frequency` = '" . $this->db->escape($product['subscription']['trial_frequency']) . "', `trial_cycle` = '" . (int)$product['subscription']['trial_cycle'] . "', `trial_duration` = '" . (int)$product['subscription']['trial_duration'] . "', `trial_remaining` = '" . (int)$product['subscription']['trial_remaining'] . "', `trial_status` = '" . (int)$product['subscription']['trial_status'] . "', `price` = '" . (float)$product['subscription']['price'] . "', `tax` = '" . (float)$product['subscription']['tax'] . "', `frequency` = '" . $this->db->escape($product['subscription']['frequency']) . "', `cycle` = '" . (int)$product['subscription']['cycle'] . "', `duration` = '" . (int)$product['subscription']['duration'] . "'");
					}
                }
            }
        }

        // Gift Voucher
        $this->load->model('extension/total/voucher');

        if (isset($data['vouchers'])) {
            foreach ($data['vouchers'] as $voucher) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "order_voucher` SET `order_id` = '" . (int)$order_id . "', `description` = '" . $this->db->escape($voucher['description']) . "', `code` = '" . $this->db->escape($voucher['code']) . "', `from_name` = '" . $this->db->escape($voucher['from_name']) . "', `from_email` = '" . $this->db->escape($voucher['from_email']) . "', `to_name` = '" . $this->db->escape($voucher['to_name']) . "', `to_email` = '" . $this->db->escape($voucher['to_email']) . "', `voucher_theme_id` = '" . (int)$voucher['voucher_theme_id'] . "', `message` = '" . $this->db->escape($voucher['message']) . "', `amount` = '" . (float)$voucher['amount'] . "'");

                $order_voucher_id = $this->db->getLastId();

                $voucher_id = $this->model_extension_total_voucher->addVoucher($order_id, $voucher);

                $this->db->query("UPDATE `" . DB_PREFIX . "order_voucher` SET `voucher_id` = '" . (int)$voucher_id . "' WHERE `order_voucher_id` = '" . (int)$order_voucher_id . "'");
            }
        }

        // Totals
        if (isset($data['totals'])) {
            foreach ($data['totals'] as $total) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "order_total` SET `order_id` = '" . (int)$order_id . "', `code` = '" . $this->db->escape($total['code']) . "', `title` = '" . $this->db->escape($total['title']) . "', `value` = '" . (float)$total['value'] . "', `sort_order` = '" . (int)$total['sort_order'] . "'");
            }
        }

        return $order_id;
    }

    public function editOrder(int $order_id, array $data): void {
        // Void the order first
        $this->addHistory($order_id, 0);

        $this->db->query("UPDATE `" . DB_PREFIX . "order` SET `invoice_prefix` = '" . $this->db->escape($data['invoice_prefix']) . "', 
						 `store_id` = '" . (int)$data['store_id'] . "', 
						 `store_name` = '" . $this->db->escape($data['store_name']) . "', 
						 `store_url` = '" . $this->db->escape($data['store_url']) . "', 
						 `customer_id` = '" . (int)$data['customer_id'] . "', 
						 `customer_group_id` = '" . (int)$data['customer_group_id'] . "', 
						 `firstname` = '" . $this->db->escape($data['firstname']) . "', 
						 `lastname` = '" . $this->db->escape($data['lastname']) . "', 
						 `email` = '" . $this->db->escape($data['email']) . "', 
						 `total` = '" . (float)$data['total'] . "', 
						 `affiliate_id` = '" . (int)$data['affiliate_id'] . "', 
						 `commission` = '" . (float)$data['commission'] . "', 
						 `date_modified` = NOW() WHERE `order_id` = '" . (int)$order_id . "'");

        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_product` WHERE `order_id` = '" . (int)$order_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_option` WHERE `order_id` = '" . (int)$order_id . "'");

        // Products
        if (isset($data['products'])) {
            foreach ($data['products'] as $product) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "order_product` SET `order_id` = '" . (int)$order_id . "', `product_id` = '" . (int)$product['product_id'] . "', `name` = '" . $this->db->escape($product['name']) . "', `model` = '" . $this->db->escape($product['model']) . "', `quantity` = '" . (int)$product['quantity'] . "', `price` = '" . (float)$product['price'] . "', `total` = '" . (float)$product['total'] . "', `tax` = '" . (float)$product['tax'] . "', `reward` = '" . (int)$product['reward'] . "'");

                $order_product_id = $this->db->getLastId();

                foreach ($product['option'] as $option) {
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "order_option` SET `order_id` = '" . (int)$order_id . "', `order_product_id` = '" . (int)$order_product_id . "', `product_option_id` = '" . (int)$option['product_option_id'] . "', `product_option_value_id` = '" . (int)$option['product_option_value_id'] . "', `name` = '" . $this->db->escape($option['name']) . "', `value` = '" . $this->db->escape($option['value']) . "', `type` = '" . $this->db->escape($option['type']) . "'");
                }

				if ($product['subscription']) {
					$this->db->query("INSERT INTO `" . DB_PREFIX . "order_subscription` SET `order_id` = '" . (int)$order_id . "', `order_product_id` = '" . (int)$order_product_id . "', `subscription_plan_id` = '" . (int)$product['subscription']['subscription_plan_id'] . "', `trial_price` = '" . (float)$product['subscription']['trial_price'] . "', `trial_tax` = '" . (float)$product['subscription']['trial_tax'] . "', `trial_frequency` = '" . $this->db->escape($product['subscription']['trial_frequency']) . "', `trial_cycle` = '" . (int)$product['subscription']['trial_cycle'] . "', `trial_duration` = '" . (int)$product['subscription']['trial_duration'] . "', `trial_remaining` = '" . (int)$product['subscription']['trial_remaining'] . "', `trial_status` = '" . (int)$product['subscription']['trial_status'] . "', `price` = '" . (float)$product['subscription']['price'] . "', `tax` = '" . (float)$product['subscription']['tax'] . "', `frequency` = '" . $this->db->escape($product['subscription']['frequency']) . "', `cycle` = '" . (int)$product['subscription']['cycle'] . "', `duration` = '" . (int)$product['subscription']['duration'] . "'");
				}
            }
        }

        // Gift Voucher
        $this->load->model('extension/total/voucher');

        $this->model_extension_total_voucher->disableVoucher($order_id);

        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_voucher` WHERE `order_id` = '" . (int)$order_id . "'");

        if (isset($data['vouchers'])) {
            foreach ($data['vouchers'] as $voucher) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "order_voucher` SET `order_id` = '" . (int)$order_id . "', `description` = '" . $this->db->escape($voucher['description']) . "', `code` = '" . $this->db->escape($voucher['code']) . "', `from_name` = '" . $this->db->escape($voucher['from_name']) . "', `from_email` = '" . $this->db->escape($voucher['from_email']) . "', `to_name` = '" . $this->db->escape($voucher['to_name']) . "', `to_email` = '" . $this->db->escape($voucher['to_email']) . "', `voucher_theme_id` = '" . (int)$voucher['voucher_theme_id'] . "', `message` = '" . $this->db->escape($voucher['message']) . "', `amount` = '" . (float)$voucher['amount'] . "'");

                $order_voucher_id = $this->db->getLastId();

                $voucher_id = $this->model_extension_total_voucher->addVoucher($order_id, $voucher);

                $this->db->query("UPDATE `" . DB_PREFIX . "order_voucher` SET `voucher_id` = '" . (int)$voucher_id . "' WHERE `order_voucher_id` = '" . (int)$order_voucher_id . "'");
            }
        }

        // Totals
        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_total` WHERE `order_id` = '" . (int)$order_id . "'");

        if (isset($data['totals'])) {
            foreach ($data['totals'] as $total) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "order_total` SET `order_id` = '" . (int)$order_id . "', `code` = '" . $this->db->escape($total['code']) . "', `title` = '" . $this->db->escape($total['title']) . "', `value` = '" . (float)$total['value'] . "', `sort_order` = '" . (int)$total['sort_order'] . "'");
            }
        }
    }

    public function deleteOrder(int $order_id): void {
        // Void the order first
        $this->addHistory($order_id, 0);

        $this->db->query("DELETE FROM `" . DB_PREFIX . "order` WHERE `order_id` = '" . (int)$order_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_product` WHERE `order_id` = '" . (int)$order_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_option` WHERE `order_id` = '" . (int)$order_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_voucher` WHERE `order_id` = '" . (int)$order_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_total` WHERE `order_id` = '" . (int)$order_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "order_history` WHERE `order_id` = '" . (int)$order_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_subscription` WHERE `order_id` = '" . (int)$order_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "customer_transaction` WHERE `order_id` = '" . (int)$order_id . "'");

        // Recurring
        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "order_recurring' AND TABLE_NAME = '" . DB_PREFIX . "order_recurring_transaction'");

        if ($query->num_rows) {
            $this->db->query("DELETE `or`, `ort` FROM `" . DB_PREFIX . "order_recurring` `or`, `" . DB_PREFIX . "order_recurring_transaction` `ort` WHERE `order_id` = '" . (int)$order_id . "' AND `ort`.`order_recurring_id` = `or`.`order_recurring_id`");
        }

        // Gift Voucher
        $this->load->model('extension/total/voucher');

        $this->model_extension_total_voucher->disableVoucher($order_id);
    }

    public function getOrder(int $order_id): array {
        $order_query = $this->db->query("SELECT *, (SELECT `os`.`name` FROM `" . DB_PREFIX . "order_status` `os` WHERE `os`.`order_status_id` = `o`.`order_status_id` AND `os`.`language_id` = `o`.`language_id`) AS `order_status` FROM `" . DB_PREFIX . "order` `o` WHERE `o`.`order_id` = '" . (int)$order_id . "'");

        if ($order_query->num_rows) {
            $country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE `country_id` = '" . (int)$order_query->row['payment_country_id'] . "'");

            if ($country_query->num_rows) {
                $payment_iso_code_2 = $country_query->row['iso_code_2'];
                $payment_iso_code_3 = $country_query->row['iso_code_3'];
            } else {
                $payment_iso_code_2 = '';
                $payment_iso_code_3 = '';
            }

            $zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE `zone_id` = '" . (int)$order_query->row['payment_zone_id'] . "'");

            if ($zone_query->num_rows) {
                $payment_zone_code = $zone_query->row['code'];
            } else {
                $payment_zone_code = '';
            }

            $country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE `country_id` = '" . (int)$order_query->row['shipping_country_id'] . "'");

            if ($country_query->num_rows) {
                $shipping_iso_code_2 = $country_query->row['iso_code_2'];
                $shipping_iso_code_3 = $country_query->row['iso_code_3'];
            } else {
                $shipping_iso_code_2 = '';
                $shipping_iso_code_3 = '';
            }

            $zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE `zone_id` = '" . (int)$order_query->row['shipping_zone_id'] . "'");

            if ($zone_query->num_rows) {
                $shipping_zone_code = $zone_query->row['code'];
            } else {
                $shipping_zone_code = '';
            }

            // Languages
            $this->load->model('localisation/language');

            $language_info = $this->model_localisation_language->getLanguage($order_query->row['language_id']);

            if ($language_info) {
                $language_code = $language_info['code'];
            } else {
                $language_code = $this->config->get('config_language');
            }

            return [
                'order_id'                => $order_query->row['order_id'],
                'invoice_no'              => $order_query->row['invoice_no'],
                'invoice_prefix'          => $order_query->row['invoice_prefix'],
                'store_id'                => $order_query->row['store_id'],
                'store_name'              => $order_query->row['store_name'],
                'store_url'               => $order_query->row['store_url'],
                'customer_id'             => $order_query->row['customer_id'],
                'firstname'               => $order_query->row['firstname'],
                'lastname'                => $order_query->row['lastname'],
                'email'                   => $order_query->row['email'],
                'total'                   => $order_query->row['total'],
                'order_status_id'         => $order_query->row['order_status_id'],
                'order_status'            => $order_query->row['order_status'],
                'affiliate_id'            => $order_query->row['affiliate_id'],
                'commission'              => $order_query->row['commission'],
                'language_id'             => $order_query->row['language_id'],
                'language_code'           => $language_code,
                'currency_id'             => $order_query->row['currency_id'],
                'currency_code'           => $order_query->row['currency_code'],
                'currency_value'          => $order_query->row['currency_value'],
                'ip'                      => $order_query->row['ip'],
                'forwarded_ip'            => $order_query->row['forwarded_ip'],
                'user_agent'              => $order_query->row['user_agent'],
                'accept_language'         => $order_query->row['accept_language'],
                'date_added'              => $order_query->row['date_added'],
                'date_modified'           => $order_query->row['date_modified']
            ];
        } else {
            return [];
        }
    }

    public function getProducts(int $order_id): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_product` WHERE `order_id` = '" . (int)$order_id . "'");

        return $query->rows;
    }

    public function getOptions(int $order_id, int $order_product_id): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_option` WHERE `order_id` = '" . (int)$order_id . "' AND `order_product_id` = '" . (int)$order_product_id . "'");

        return $query->rows;
    }

	/**
	 * @param int $order_id
	 * @param int $order_product_id
	 *
	 * @return array
	 */
	public function getSubscription(int $order_id, int $order_product_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_subscription` WHERE `order_id` = '" . (int)$order_id . "' AND `order_product_id` = '" . (int)$order_product_id . "'");

		return $query->row;
	}

	/**
	 * @param array $data
	 *
	 * @return array
	 */
	public function getSubscriptions(array $data): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "subscription`";

		$implode = [];

		if (!empty($data['filter_date_next'])) {
			$implode[] = "DATE(`date_next`) <= DATE('" . $this->db->escape($data['filter_date_next']) . "')";
		}

		if (!empty($data['filter_subscription_status_id'])) {
			$implode[] = "`subscription_status_id` = '" . (int)$data['filter_subscription_status_id'] . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = [
			'pd.name',
			'p.model',
			'p.price',
			'p.quantity',
			'p.status',
			'p.sort_order'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `o`.`order_id`";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * @param int $subscription_id
	 *
	 * @return int
	 */
	public function getTotalOrdersBySubscriptionId(int $subscription_id): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "order` WHERE `subscription_id` = '" . (int)$subscription_id . "' AND `customer_id` = '" . (int)$this->customer->getId() . "'");

		return (int)$query->row['total'];
	}

    public function getVouchers(int $order_id): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_voucher` WHERE `order_id` = '" . (int)$order_id . "'");

        return $query->rows;
    }

    public function getTotals(int $order_id): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_total` WHERE `order_id` = '" . (int)$order_id . "' ORDER BY `sort_order` ASC");

        return $query->rows;
    }

    public function addHistory(int $order_id, int $order_status_id, string $comment = '', bool $notify = false, bool $override = false): int {
        $order_info = $this->getOrder($order_id);

        if ($order_info) {
            // Fraud Detection
            $this->load->model('account/customer');

            $customer_info = $this->model_account_customer->getCustomer($order_info['customer_id']);

            if ($customer_info && $customer_info['safe']) {
                $safe = true;
            } else {
                $safe = false;
            }

            // Only do the fraud check if the customer is not on the safe list and the order status is changing into the complete or process order status
            if (!$safe && !$override && in_array($order_status_id, array_merge((array)$this->config->get('config_processing_status'), (array)$this->config->get('config_complete_status')))) {
                // Anti-Fraud
                $this->load->model('setting/extension');

                $extensions = $this->model_setting_extension->getExtensionsByType('fraud');

                foreach ($extensions as $extension) {
                    if ($this->config->get('fraud_' . $extension['code'] . '_status')) {
                        $this->load->model('extension/fraud/' . $extension['code']);

                        if (isset($this->{'model_extension_fraud_' . $extension['code']}->check)) {
                            $fraud_status_id = $this->{'model_extension_fraud_' . $extension['code']}->check($order_info);

                            if ($fraud_status_id) {
                                $order_status_id = $fraud_status_id;
                            }
                        }
                    }
                }
            }

            // If current order status is not processing or complete but new status is processing or complete then commence completing the order
            if (!in_array($order_info['order_status_id'], array_merge((array)$this->config->get('config_processing_status'), (array)$this->config->get('config_complete_status'))) && in_array($order_status_id, array_merge((array)$this->config->get('config_processing_status'), (array)$this->config->get('config_complete_status')))) {
                // Redeem coupon, vouchers and reward points
                $order_totals = $this->getTotals($order_id);

                foreach ($order_totals as $order_total) {
                    $this->load->model('extension/total/' . $order_total['code']);

                    if (isset($this->{'model_extension_total_' . $order_total['code']}->confirm)) {
                        // Confirm coupon, vouchers and reward points
                        $fraud_status_id = $this->{'model_extension_total_' . $order_total['code']}->confirm($order_info, $order_total);

                        // If the balance on the coupon, vouchers and reward points is not enough to cover the transaction or has already been used then the fraud order status is returned.
                        if ($fraud_status_id) {
                            $order_status_id = $fraud_status_id;
                        }
                    }
                }

                // Stock subtraction
                $order_products = $this->getProducts($order_id);

                foreach ($order_products as $order_product) {
                    $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `quantity` = (`quantity` - " . (int)$order_product['quantity'] . ") WHERE `product_id` = '" . (int)$order_product['product_id'] . "' AND `subtract` = '1'");

                    $order_options = $this->getOptions($order_id, $order_product['order_product_id']);

                    foreach ($order_options as $order_option) {
                        $this->db->query("UPDATE `" . DB_PREFIX . "product_option_value` SET `quantity` = (`quantity` - " . (int)$order_product['quantity'] . ") WHERE `product_option_value_id` = '" . (int)$order_option['product_option_value_id'] . "' AND `subtract` = '1'");
                    }
                }

                // Add commission if sale is linked to affiliate referral.
                if ($order_info['affiliate_id'] && $this->config->get('config_affiliate_auto')) {
                    // Customers
                    $this->load->model('account/customer');

                    if (!$this->model_account_customer->getTotalTransactionsByOrderId($order_id)) {
                        $this->model_account_customer->addTransaction($order_info['affiliate_id'], $this->language->get('text_orders_id') . ' #' . $order_id, $order_info['commission'], $order_id);
                    }
                }
            }

			// Update the DB with the new statuses
            $this->db->query("UPDATE `" . DB_PREFIX . "order` SET `order_status_id` = '" . (int)$order_status_id . "', `date_modified` = NOW() WHERE `order_id` = '" . (int)$order_id . "'");

            $this->db->query("INSERT INTO `" . DB_PREFIX . "order_history` SET `order_id` = '" . (int)$order_id . "', `order_status_id` = '" . (int)$order_status_id . "', `notify` = '" . (int)$notify . "', `comment` = '" . $this->db->escape($comment) . "', `date_added` = NOW()");

            // If old order status is the processing, or complete status but new status is not, then commence restock. Then, we remove the coupon, voucher and reward history
            if (in_array($order_info['order_status_id'], array_merge((array)$this->config->get('config_processing_status'), $this->config->get('config_complete_status'))) && !in_array($order_status_id, array_merge((array)$this->config->get('config_processing_status'), (array)$this->config->get('config_complete_status')))) {
                // Restock
                $order_products = $this->getProducts($order_id);

				// Add subscription
				$this->load->model('checkout/subscription');

                foreach ($order_products as $order_product) {
					// Subscription
					$order_subscription_info = $this->getSubscription($order_id, $order_product['order_product_id']);

					if ($order_subscription_info) {
						// Add options for subscription
						$option_data = [];

						$options = $this->getOptions($order_id, $order_product['order_product_id']);

						foreach ($options as $option) {
							if ($option['type'] == 'text' || $option['type'] == 'textarea' || $option['type'] == 'file' || $option['type'] == 'date' || $option['type'] == 'datetime' || $option['type'] == 'time') {
								$option_data[$option['product_option_id']] = $option['value'];
							} elseif ($option['type'] == 'select' || $option['type'] == 'radio') {
								$option_data[$option['product_option_id']] = $option['product_option_value_id'];
							} elseif ($option['type'] == 'checkbox') {
								$option_data[$option['product_option_id']][] = $option['product_option_value_id'];
							}
						}

						// Add subscription if one is not setup
						$subscription_info = $this->model_checkout_subscription->getSubscriptionByOrderProductId($order_id, $order_product['order_product_id']);

						if ($subscription_info) {
							$subscription_id = $subscription_info['subscription_id'];
						} else {
							$subscription_id = $this->model_checkout_subscription->addSubscription(array_merge($order_subscription_info, $order_product, $order_info, ['option' => $option_data]));
						}

						// Add history and set active subscription
						$this->model_checkout_subscription->addHistory($subscription_id, (int)$this->config->get('config_subscription_active_id'));
					}

                    $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `quantity` = (`quantity` + " . (int)$order_product['quantity'] . ") WHERE `product_id` = '" . (int)$order_product['product_id'] . "' AND `subtract` = '1'");

                    $order_options = $this->getOptions($order_id, $order_product['order_product_id']);

                    foreach ($order_options as $order_option) {
                        $this->db->query("UPDATE `" . DB_PREFIX . "product_option_value` SET `quantity` = (`quantity` + " . (int)$order_product['quantity'] . ") WHERE `product_option_value_id` = '" . (int)$order_option['product_option_value_id'] . "' AND `subtract` = '1'");
                    }
                }

                // Remove coupon, vouchers and reward points history
                $order_totals = $this->getTotals($order_id);

                foreach ($order_totals as $order_total) {
                    $this->load->model('extension/total/' . $order_total['code']);

                    if (isset($this->{'model_extension_total_' . $order_total['code']}->unconfirm)) {
                        $this->{'model_extension_total_' . $order_total['code']}->unconfirm($order_id);
                    }
                }

                // Remove commission if sale is linked to affiliate referral.
                if ($order_info['affiliate_id']) {
                    // Affiliate
                    $this->load->model('account/customer');

                    $this->model_account_customer->deleteTransactionByOrderId($order_id);
                }
            }

            $this->cache->delete('product');
        }

        return 0;
    }
}
