<?php
class ControllerAccountAccount extends Controller {
    public function index(): void {
		$this->document->addClass('topNavPage');
        if (!$this->customer->isLogged() || (!isset($this->request->get['customer_token']) || !isset($this->session->data['customer_token']) || ($this->request->get['customer_token'] != $this->session->data['customer_token']))) {
            $this->session->data['redirect'] = $this->url->link('account/account', '', true);

            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->language('account/account');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => 'Home',
            'href' => $this->url->link('common/home')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_account'),
          //  'href' => $this->url->link('account/account', 'customer_token=' . $this->session->data['customer_token'], true)
        ];

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $data['credit_cards'] = [];

        $files = glob(DIR_APPLICATION . 'controller/extension/credit_card/*.php');

        foreach ($files as $file) {
            $code = basename($file, '.php');

            if ($this->config->get('payment_' . $code . '_status') && $this->config->get('payment_' . $code . '_card')) {
                $this->load->language('extension/credit_card/' . $code, 'extension');

                $data['credit_cards'][] = [
                    'name' => $this->language->get('extension')->get('heading_title'),
                    'href' => $this->url->link('extension/credit_card/' . $code, '', true)
                ];
            }
        }

        if ($this->config->get('total_reward_status')) {
            $data['reward'] = $this->url->link('account/reward', 'customer_token=' . $this->session->data['customer_token'], true);
        } else {
            $data['reward'] = '';
        }

        // Affiliate
        if ($this->config->get('config_affiliate_status')) {
            $data['affiliate'] = $this->url->link('account/affiliate', 'customer_token=' . $this->session->data['customer_token'], true);

            // Customers
            $this->load->model('account/customer');

            $affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());

            if ($affiliate_info) {
                $data['tracking'] = $this->url->link('account/tracking', 'customer_token=' . $this->session->data['customer_token'], true);
            } else {
                $data['tracking'] = '';
            }
        } else {
            $data['affiliate'] = '';
        }

        $data['edit'] = $this->url->link('account/edit', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['password'] = $this->url->link('account/password', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['address'] = $this->url->link('account/address', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['payment_method'] = $this->url->link('account/payment_method', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['wishlist'] = $this->url->link('account/wishlist', 'customer_token=' . $this->session->data['customer_token']);
        $data['order'] = $this->url->link('account/order', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['recurring'] = $this->url->link('account/recurring', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['subscription'] = $this->url->link('account/subscription', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['download'] = $this->url->link('account/download', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['returns'] = $this->url->link('account/returns', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['transaction'] = $this->url->link('account/transaction', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['newsletter'] = $this->url->link('account/newsletter', 'customer_token=' . $this->session->data['customer_token'], true);

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');
		
		$data['account_info'] = $this->model_account_customer->getCustomer($this->customer->getId());
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			// Обработка формы
			$this->model_account_customer->editCustomer($this->customer->getId(), $this->request->post);
			$this->session->data['success'] = 'Data successfully saved!';
			$this->response->redirect($this->url->link('account/account', '', true));
		}

		$data['entry_firstname'] = $this->language->get('entry_firstname');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_discord'] = $this->language->get('entry_discord');

		$data['button_save'] = $this->language->get('button_save');

		$data['action'] = $this->url->link('account/account', 'customer_token=' . $this->session->data['customer_token'], true);

		// Передача текущих значений в форму
		$data['firstname'] = isset($this->request->post['firstname']) ? $this->request->post['firstname'] : ($data['account_info']['firstname'] ?? '');
		$data['email'] = isset($this->request->post['email']) ? $this->request->post['email'] : ($data['account_info']['email'] ?? '');
		$data['discord'] = isset($this->request->post['discord']) ? $this->request->post['discord'] : ($data['account_info']["custom_field"] ?? '');
		if(!empty($data['discord'])){
			$data['discord'] = json_decode($data['discord'], true);
			if(isset($data['discord'][1])){
				$data['discord'] = $data['discord'][1];
			}else{
				$data['discord'] = '';
			}
		}
        $this->response->setOutput($this->load->view('account/account', $data));
    }

    public function country(): void {
        $json = [];

        // Countries
        $this->load->model('localisation/country');

        $country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

        if ($country_info) {
            // Zones
            $this->load->model('localisation/zone');

            $json = [
                'country_id'        => $country_info['country_id'],
                'name'              => $country_info['name'],
                'iso_code_2'        => $country_info['iso_code_2'],
                'iso_code_3'        => $country_info['iso_code_3'],
                'address_format'    => $country_info['address_format'],
                'postcode_required' => $country_info['postcode_required'],
                'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
                'status'            => $country_info['status']
            ];
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
	private function validateForm() {
		if (!isset($this->request->post['email'])) {
			return false;
		}

		// Другие проверки по необходимости

		if ($this->request->post['email'] != $this->customer->getEmail() && $this->model_account_customer->getTotalCustomersByEmail($this->request->post['email']) > 0) {
			$this->error['email'] = $this->language->get('error_email_exists');
		}

		return empty($this->error);
	}
}