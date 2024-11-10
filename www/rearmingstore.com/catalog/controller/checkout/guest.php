<?php
class ControllerCheckoutGuest extends Controller {
    public function index(): void {
        $this->load->language('checkout/checkout');

        $data['customer_groups'] = [];

        if (is_array($this->config->get('config_customer_group_display'))) {
            // Customer Groups
            $this->load->model('account/customer_group');

            $customer_groups = $this->model_account_customer_group->getCustomerGroups();

            foreach ($customer_groups as $customer_group) {
                if (in_array($customer_group['customer_group_id'], (array)$this->config->get('config_customer_group_display'))) {
                    $data['customer_groups'][] = $customer_group;
                }
            }
        }

        if (isset($this->session->data['guest']['customer_group_id'])) {
            $data['customer_group_id'] = (int)$this->session->data['guest']['customer_group_id'];
        } else {
            $data['customer_group_id'] = $this->config->get('config_customer_group_id');
        }

        if (isset($this->session->data['guest']['firstname'])) {
            $data['firstname'] = $this->session->data['guest']['firstname'];
        } else {
            $data['firstname'] = '';
        }

        if (isset($this->session->data['guest']['lastname'])) {
            $data['lastname'] = $this->session->data['guest']['lastname'];
        } else {
            $data['lastname'] = '';
        }

        if (isset($this->session->data['guest']['email'])) {
            $data['email'] = $this->session->data['guest']['email'];
        } else {
            $data['email'] = '';
        }

        if (isset($this->session->data['guest']['telephone'])) {
            $data['telephone'] = $this->session->data['guest']['telephone'];
        } else {
            $data['telephone'] = '';
        }

        if (isset($this->session->data['payment_address']['company'])) {
            $data['company'] = $this->session->data['payment_address']['company'];
        } else {
            $data['company'] = '';
        }

        if (isset($this->session->data['payment_address']['address_1'])) {
            $data['address_1'] = $this->session->data['payment_address']['address_1'];
        } else {
            $data['address_1'] = '';
        }

        if (isset($this->session->data['payment_address']['address_2'])) {
            $data['address_2'] = $this->session->data['payment_address']['address_2'];
        } else {
            $data['address_2'] = '';
        }

        if (isset($this->session->data['payment_address']['postcode'])) {
            $data['postcode'] = $this->session->data['payment_address']['postcode'];
        } elseif (isset($this->session->data['shipping_address']['postcode'])) {
            $data['postcode'] = $this->session->data['shipping_address']['postcode'];
        } else {
            $data['postcode'] = '';
        }

        if (isset($this->session->data['payment_address']['city'])) {
            $data['city'] = $this->session->data['payment_address']['city'];
        } else {
            $data['city'] = '';
        }

        if (isset($this->session->data['payment_address']['country_id'])) {
            $data['country_id'] = (int)$this->session->data['payment_address']['country_id'];
        } elseif (isset($this->session->data['shipping_address']['country_id'])) {
            $data['country_id'] = (int)$this->session->data['shipping_address']['country_id'];
        } else {
            $data['country_id'] = $this->config->get('config_country_id');
        }

        if (isset($this->session->data['payment_address']['zone_id'])) {
            $data['zone_id'] = (int)$this->session->data['payment_address']['zone_id'];
        } elseif (isset($this->session->data['shipping_address']['zone_id'])) {
            $data['zone_id'] = (int)$this->session->data['shipping_address']['zone_id'];
        } else {
            $data['zone_id'] = '';
        }

        if (isset($this->session->data['guest']['email'])) {
            $data['email'] = $this->session->data['guest']['email'];
        } else {
            $data['email'] = '';
        }

        if (isset($this->session->data['guest']['skype'])) {
            $data['skype'] = $this->session->data['guest']['skype'];
        } else {
            $data['skype'] = '';
        }

        if (isset($this->session->data['guest']['discord'])) {
            $data['discord'] = $this->session->data['guest']['discord'];
        } else {
            $data['discord'] = '';
        }

        if (isset($this->session->data['guest']['nickname'])) {
            $data['nickname'] = $this->session->data['guest']['nickname'];
        } else {
            $data['nickname'] = '';
        }

        if (isset($this->session->data['guest']['server'])) {
            $data['server'] = $this->session->data['guest']['server'];
        } else {
            $data['server'] = '';
        }

        if (isset($this->session->data['guest']['battletag'])) {
            $data['battletag'] = $this->session->data['guest']['battletag'];
        } else {
            $data['battletag'] = '';
        }
        
        // Countries
        $this->load->model('localisation/country');

        $data['countries'] = $this->model_localisation_country->getCountries();

        // Custom Fields
        $this->load->model('account/custom_field');

        $data['custom_fields'] = $this->model_account_custom_field->getCustomFields();

        if (isset($this->session->data['guest']['custom_field'])) {
            if (isset($this->session->data['guest']['custom_field'])) {
                $guest_custom_field = $this->session->data['guest']['custom_field'];
            } else {
                $guest_custom_field = [];
            }

            if (isset($this->session->data['payment_address']['custom_field'])) {
                $address_custom_field = $this->session->data['payment_address']['custom_field'];
            } else {
                $address_custom_field = [];
            }

            $data['guest_custom_field'] = $guest_custom_field + $address_custom_field;
        } else {
            $data['guest_custom_field'] = [];
        }

        $data['shipping_required'] = $this->cart->hasShipping();

        if (isset($this->session->data['guest']['shipping_address'])) {
            $data['shipping_address'] = $this->session->data['guest']['shipping_address'];
        } else {
            $data['shipping_address'] = true;
        }

        // Captcha
        if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('guest', (array)$this->config->get('config_captcha_page'))) {
            $data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
        } else {
            $data['captcha'] = '';
        }
		$data['payment_method'] = $this->load->controller('checkout/payment_method');

        $this->response->setOutput($this->load->view('checkout/guest', $data));
    }

    public function save(): void {
        $this->load->language('checkout/checkout');

        $json = [];
		$this->load->model('account/customer');

        // Validate cart has products and has stock.
        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $json['redirect'] = $this->url->link('checkout/cart');
        }

        // Check if guest checkout is available.
        if (!$this->config->get('config_checkout_guest') || $this->config->get('config_customer_price') || $this->cart->hasDownload()) {
            $json['redirect'] = $this->url->link('checkout/checkout', '', true);
        }

        if (!$json) {
            if ((oc_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
                $json['error']['email'] = $this->language->get('error_email');
            }

            if ((oc_strlen($this->request->post['discord']) < 3) || (oc_strlen($this->request->post['discord']) > 128)) {
                $json['error']['discord'] = 'This field is required';
            }
            
            if (empty($this->request->post['agree_terms'])) {
                $json['error']['agree_terms'] = 'You must agree to the terms of service!';
            }

            // Customer Group
            if (isset($this->request->post['customer_group_id']) && in_array($this->request->post['customer_group_id'], (array)$this->config->get('config_customer_group_display'))) {
                $customer_group_id = (int)$this->request->post['customer_group_id'];
            } else {
                $customer_group_id = (int)$this->config->get('config_customer_group_id');
            }

            // Custom field validation
            $this->load->model('account/custom_field');

            $custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

            foreach ($custom_fields as $custom_field) {
                if ($custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
                    $json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
                } elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !preg_match(html_entity_decode($custom_field['validation'], ENT_QUOTES, 'UTF-8'), $this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
                    $json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_regex'), $custom_field['name']);
                }
            }

            // Captcha
            if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('guest', (array)$this->config->get('config_captcha_page'))) {
                $captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

                if ($captcha) {
                    $json['error']['captcha'] = $captcha;
                }
            }
        }

        if (!$json) {
			if($this->customer->isLogged()){
				$data['account_info'] = $this->model_account_customer->getCustomer($this->customer->getId());
				$this->session->data['account'] = 'guest';

				$this->session->data['guest']['customer_group_id'] = (int)$this->config->get('config_customer_group_id');
				$this->session->data['customer']['customer_id'] = (int)$this->customer->getId();
				$data['discord'] = isset($this->request->post['discord']) ? $this->request->post['discord'] : ($data['account_info']["custom_field"] ?? '');
				if(!empty($data['discord'])){
					$data['discord'] = json_decode($data['discord'], true);
					if(isset($data['discord'][1])){
						$data['discord'] = $data['discord'][1];
					}else{
						$data['discord'] = '';
					}
				}
				$this->session->data['guest']['discord'] = $data['discord'];
				$this->session->data['guest']['nickname'] = (int)$this->request->post['nickname'];
				$this->session->data['guest']['email'] = $this->request->post['email'];
			}else{
				$this->session->data['account'] = 'guest';

				$this->session->data['guest']['customer_group_id'] = $customer_group_id;
				$this->session->data['guest']['discord'] = $this->request->post['discord'];
				$this->session->data['guest']['nickname'] = (int)$this->request->post['nickname'];
				$this->session->data['guest']['email'] = $this->request->post['email'];
			}
            
            $this->session->data['guest']['firstname'] = '';
            $this->session->data['guest']['lastname'] = '';
            $this->session->data['guest']['email'] = $this->request->post['email'];
            $this->session->data['guest']['telephone'] = '';

            if (isset($this->request->post['custom_field'])) {
                $this->session->data['guest']['custom_field'] = $this->request->post['custom_field'];
            } else {
                $this->session->data['guest']['custom_field'] = [];
            }

            $this->session->data['payment_address']['firstname'] = '';
            $this->session->data['payment_address']['lastname'] = '';
            $this->session->data['payment_address']['company'] = '';
            $this->session->data['payment_address']['address_1'] = '';
            $this->session->data['payment_address']['address_2'] = '';
            $this->session->data['payment_address']['postcode'] = '';
            $this->session->data['payment_address']['city'] = '';
            $this->session->data['payment_address']['country_id'] = 0;
            $this->session->data['payment_address']['zone_id'] = 0;

            // Countries
            $this->load->model('localisation/country');

            $this->session->data['payment_address']['country'] = '';
			$this->session->data['payment_address']['iso_code_2'] = '';
			$this->session->data['payment_address']['iso_code_3'] = '';
			$this->session->data['payment_address']['address_format'] = '';

            $this->session->data['payment_address']['custom_field'] = [];

            // Zones
            $this->load->model('localisation/zone');


            $this->session->data['payment_address']['zone'] = '';
			$this->session->data['payment_address']['zone_code'] = '';

            $this->session->data['guest']['shipping_address'] = false;

            $this->session->data['guest']['skype'] = $this->request->post['skype'];
			$this->session->data['guest']['server'] = (int)$this->request->post['server'];
			$this->session->data['guest']['battletag'] = (int)$this->request->post['battletag'];
			
			if (!isset($this->request->post['payment_method'])) {
				$json['error']['warning'] = $this->language->get('error_payment');
			} elseif (!isset($this->session->data['payment_methods'][$this->request->post['payment_method']])) {
				$json['error']['warning'] = $this->language->get('error_payment');
			}
			
        }
		if (!$json) {
            $this->session->data['payment_method'] = $this->session->data['payment_methods'][$this->request->post['payment_method']];

            $this->session->data['comment'] = '';
        }
		
		// Validate minimum quantity requirements.
        $products = $this->cart->getProducts();
        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $json['error']['redirect'] = $this->url->link('checkout/cart');
                break;
            }
        }
		
        if (!$json) {
            $this->load->language('checkout/checkout');

            $order_data = [];

            $total = 0;
            $totals = [];
            $taxes = $this->cart->getTaxes();

            // Because __call cannot keep var references, so we put them into an array.
            $total_data = [
                'totals' => &$totals,
                'taxes'  => &$taxes,
                'total'  => &$total
            ];

            // Extensions
            $this->load->model('setting/extension');

            $sort_order = [];
            $results = $this->model_setting_extension->getExtensionsByType('total');

            foreach ($results as $key => $value) {
                $sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
            }

            array_multisort($sort_order, SORT_ASC, $results);

            foreach ($results as $result) {
                if ($this->config->get('total_' . $result['code'] . '_status')) {
                    $this->load->model('extension/total/' . $result['code']);

                    // We have to put the totals in an array so that they pass by reference.
                    $this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
                }
            }

            $sort_order = [];

            foreach ($totals as $key => $value) {
                $sort_order[$key] = $value['sort_order'];
            }

            array_multisort($sort_order, SORT_ASC, $totals);

            $order_data['totals'] = $totals;
            $order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
            $order_data['store_id'] = $this->config->get('config_store_id');
            $order_data['store_name'] = $this->config->get('config_name');

            if ($order_data['store_id']) {
                $order_data['store_url'] = $this->config->get('config_url');
            } else {
                if ($this->request->server['HTTPS']) {
                    $order_data['store_url'] = HTTPS_SERVER;
                } else {
                    $order_data['store_url'] = HTTP_SERVER;
                }
            }

            // Customers
            $this->load->model('account/customer');

            if ($this->customer->isLogged()) {
                $customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

                $order_data['customer_id'] = $this->customer->getId();
                $order_data['customer_group_id'] = $customer_info['customer_group_id'];
                $order_data['firstname'] = $customer_info['firstname'];
                $order_data['lastname'] = $customer_info['lastname'];
                $order_data['email'] = $customer_info['email'];
                $order_data['telephone'] = $customer_info['telephone'];
                $order_data['custom_field'] = json_decode($customer_info['custom_field'], true);
            } elseif (isset($this->session->data['guest'])) {
                $order_data['customer_id'] = 0;
                $order_data['customer_group_id'] = (int)$this->session->data['guest']['customer_group_id'];
                $order_data['firstname'] = $this->session->data['guest']['firstname'];
                $order_data['lastname'] = $this->session->data['guest']['lastname'];
                $order_data['email'] = $this->session->data['guest']['email'];
                $order_data['telephone'] = $this->session->data['guest']['telephone'];
                $order_data['custom_field'] = $this->session->data['guest']['custom_field'];
            }
			$order_data['skype'] = $this->session->data['guest']['skype'];
			$order_data['discord'] = $this->session->data['guest']['discord'];
			$order_data['nickname'] = $this->session->data['guest']['nickname'];
			$order_data['server'] = $this->session->data['guest']['server'];
			$order_data['battletag'] = $this->session->data['guest']['battletag'];

            $order_data['payment_zone_id'] = (int)$this->session->data['payment_address']['zone_id'];
            $order_data['payment_country_id'] = (int)$this->session->data['payment_address']['country_id'];
            $order_data['payment_firstname'] = $this->session->data['payment_address']['firstname'];
            $order_data['payment_lastname'] = $this->session->data['payment_address']['lastname'];
            $order_data['payment_company'] = $this->session->data['payment_address']['company'];
            $order_data['payment_address_1'] = $this->session->data['payment_address']['address_1'];
            $order_data['payment_address_2'] = $this->session->data['payment_address']['address_2'];
            $order_data['payment_city'] = $this->session->data['payment_address']['city'];
            $order_data['payment_postcode'] = $this->session->data['payment_address']['postcode'];
            $order_data['payment_zone'] = $this->session->data['payment_address']['zone'];
            $order_data['payment_country'] = $this->session->data['payment_address']['country'];
            $order_data['payment_address_format'] = $this->session->data['payment_address']['address_format'];
            $order_data['payment_custom_field'] = isset($this->session->data['payment_address']['custom_field']) ? $this->session->data['payment_address']['custom_field'] : [];

            if (isset($this->session->data['payment_method']['title'])) {
                $order_data['payment_method'] = $this->session->data['payment_method']['title'];
            } else {
                $order_data['payment_method'] = '';
            }

            if (isset($this->session->data['payment_method']['code'])) {
                $order_data['payment_code'] = $this->session->data['payment_method']['code'];
            } else {
                $order_data['payment_code'] = '';
            }

            if ($this->cart->hasShipping()) {
                $order_data['shipping_firstname'] = $this->session->data['shipping_address']['firstname'];
                $order_data['shipping_lastname'] = $this->session->data['shipping_address']['lastname'];
                $order_data['shipping_company'] = $this->session->data['shipping_address']['company'];
                $order_data['shipping_address_1'] = $this->session->data['shipping_address']['address_1'];
                $order_data['shipping_address_2'] = $this->session->data['shipping_address']['address_2'];
                $order_data['shipping_city'] = $this->session->data['shipping_address']['city'];
                $order_data['shipping_postcode'] = $this->session->data['shipping_address']['postcode'];
                $order_data['shipping_zone'] = $this->session->data['shipping_address']['zone'];
                $order_data['shipping_zone_id'] = $this->session->data['shipping_address']['zone_id'];
                $order_data['shipping_country'] = $this->session->data['shipping_address']['country'];
                $order_data['shipping_country_id'] = $this->session->data['shipping_address']['country_id'];
                $order_data['shipping_address_format'] = $this->session->data['shipping_address']['address_format'];
                $order_data['shipping_custom_field'] = isset($this->session->data['shipping_address']['custom_field']) ? $this->session->data['shipping_address']['custom_field'] : [];

                if (isset($this->session->data['shipping_method']['title'])) {
                    $order_data['shipping_method'] = $this->session->data['shipping_method']['title'];
                } else {
                    $order_data['shipping_method'] = '';
                }

                if (isset($this->session->data['shipping_method']['code'])) {
                    $order_data['shipping_code'] = $this->session->data['shipping_method']['code'];
                } else {
                    $order_data['shipping_code'] = '';
                }
            } else {
                $order_data['shipping_zone_id'] = 0;
                $order_data['shipping_country_id'] = 0;
                $order_data['shipping_firstname'] = '';
                $order_data['shipping_lastname'] = '';
                $order_data['shipping_company'] = '';
                $order_data['shipping_address_1'] = '';
                $order_data['shipping_address_2'] = '';
                $order_data['shipping_city'] = '';
                $order_data['shipping_postcode'] = '';
                $order_data['shipping_zone'] = '';
                $order_data['shipping_country'] = '';
                $order_data['shipping_address_format'] = '';
                $order_data['shipping_method'] = '';
                $order_data['shipping_code'] = '';
                $order_data['shipping_custom_field'] = [];
            }

            $order_data['products'] = [];

            foreach ($this->cart->getProducts() as $product) {
                $option_data = [];

                foreach ($product['option'] as $option) {
                    $option_data[] = [
                        'product_option_id'       => $option['product_option_id'],
                        'product_option_value_id' => $option['product_option_value_id'],
                        'option_id'               => $option['option_id'],
                        'option_value_id'         => $option['option_value_id'],
                        'name'                    => $option['name'],
                        'value'                   => $option['value'],
                        'type'                    => $option['type']
                    ];
                }

				$subscription_data = [];

				if ($product['subscription']) {
					$subscription_data = [
						'subscription_plan_id' => $product['subscription']['subscription_plan_id'],
						'name'                 => $product['subscription']['name'],
						'trial_price'          => $product['subscription']['trial_price'],
						'trial_tax'            => $this->tax->getTax($product['subscription']['trial_price'], $product['tax_class_id']),
						'trial_frequency'      => $product['subscription']['trial_frequency'],
						'trial_cycle'          => $product['subscription']['trial_cycle'],
						'trial_duration'       => $product['subscription']['trial_duration'],
						'trial_remaining'      => $product['subscription']['trial_remaining'],
						'trial_status'         => $product['subscription']['trial_status'],
						'price'                => $product['subscription']['price'],
						'tax'                  => $this->tax->getTax($product['subscription']['price'], $product['tax_class_id']),
						'frequency'            => $product['subscription']['frequency'],
						'cycle'                => $product['subscription']['cycle'],
						'duration'             => $product['subscription']['duration']
					];
				}

                $order_data['products'][] = [
                    'product_id'   => $product['product_id'],
                    'name'         => $product['name'],
                    'model'        => $product['model'],
                    'option'       => $option_data,
                    'subscription' => $subscription_data,
                    'download'     => $product['download'],
                    'quantity'     => $product['quantity'],
                    'subtract'     => $product['subtract'],
                    'price'        => $product['price'],
                    'total'        => $product['total'],
                    'tax'          => $this->tax->getTax($product['price'], $product['tax_class_id']),
                    'reward'       => $product['reward']
                ];
            }

            // Gift Voucher
            $order_data['vouchers'] = [];

            if (!empty($this->session->data['vouchers'])) {
                foreach ($this->session->data['vouchers'] as $voucher) {
                    $order_data['vouchers'][] = [
                        'description'      => $voucher['description'],
                        'code'             => oc_token(10),
                        'to_name'          => $voucher['to_name'],
                        'to_email'         => $voucher['to_email'],
                        'from_name'        => $voucher['from_name'],
                        'from_email'       => $voucher['from_email'],
                        'voucher_theme_id' => $voucher['voucher_theme_id'],
                        'message'          => $voucher['message'],
                        'amount'           => $voucher['amount']
                    ];
                }
            }

            $order_data['comment'] = '';

            $order_data['total'] = $total_data['total'];

            // Affiliate
            $order_data['affiliate_id'] = 0;
            $order_data['commission'] = 0;
            $order_data['marketing_id'] = 0;
            $order_data['tracking'] = '';

            if ($this->config->get('config_affiliate_status') && isset($this->session->data['tracking'])) {
                $subtotal = $this->cart->getSubTotal();

                // Customer Affiliate
                $this->load->model('account/affiliate');

                $affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->session->data['tracking']);

                if ($affiliate_info) {
                    $order_data['affiliate_id'] = $affiliate_info['customer_id'];
                    $order_data['commission'] = ($subtotal / 100) * $affiliate_info['commission'];
                    $order_data['tracking'] = $this->session->data['tracking'];
                }
            }

            $order_data['language_id'] = $this->config->get('config_language_id');
            $order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
            $order_data['currency_code'] = $this->session->data['currency'];
            $order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
            $order_data['ip'] = $this->request->server['REMOTE_ADDR'];

            if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
                $order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
            } elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
                $order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
            } else {
                $order_data['forwarded_ip'] = '';
            }

            if (isset($this->request->server['HTTP_USER_AGENT'])) {
                $order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
            } else {
                $order_data['user_agent'] = '';
            }

            if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
                $order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
            } else {
                $order_data['accept_language'] = '';
            }

            // Orders
            $this->load->model('checkout/order');
			
            if (!isset($this->session->data['order_id'])) {
                $this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);
            } else {
                $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

                if ($order_info && !$order_info['order_status_id']) {
                    $this->model_checkout_order->editOrder($this->session->data['order_id'], $order_data);
                }
            }

            // Uploaded files
            $this->load->model('tool/upload');

            $json['products'] = [];

            foreach ($this->cart->getProducts() as $product) {
                $option_data = [];

                foreach ($product['option'] as $option) {
                    if ($option['type'] != 'file') {
                        $value = $option['value'];
                    } else {
                        $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                        if ($upload_info) {
                            $value = $upload_info['name'];
                        } else {
                            $value = '';
                        }
                    }

                    $option_data[] = [
                        'name'  => $option['name'],
                        'value' => (oc_strlen($value) > 20 ? oc_substr($value, 0, 20) . '..' : $value)
                    ];
                }

                // Subscription
				$description = '';

				if ($product['subscription']) {
					if ($product['subscription']['trial_status']) {
						$trial_price = $this->currency->format($this->tax->calculate($product['subscription']['trial_price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						$trial_cycle = $product['subscription']['trial_cycle'];
						$trial_frequency = $this->language->get('text_' . $product['subscription']['trial_frequency']);
						$trial_duration = $product['subscription']['trial_duration'];

						$description .= sprintf($this->language->get('text_subscription_trial'), $trial_price, $trial_cycle, $trial_frequency, $trial_duration);
					}

					$price = $this->currency->format($this->tax->calculate($product['subscription']['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$cycle = $product['subscription']['cycle'];
					$frequency = $this->language->get('text_' . $product['subscription']['frequency']);
					$duration = $product['subscription']['duration'];

					if ($duration) {
						$description .= sprintf($this->language->get('text_subscription_duration'), $price_status ? $price : '', $cycle, $frequency, $duration);
					} else {
						$description .= sprintf($this->language->get('text_subscription_cancel'), $price_status ? $price : '', $cycle, $frequency);
					}
				}

                $json['products'][] = [
                    'cart_id'      => $product['cart_id'],
                    'product_id'   => $product['product_id'],
                    'name'         => $product['name'],
                    'model'        => $product['model'],
                    'option'       => $option_data,
                    'subscription' => $description,
                    'quantity'     => $product['quantity'],
                    'subtract'     => $product['subtract'],
                    'price'        => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
                    'total'        => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']),
                    'href'         => $this->url->link('product/product', 'product_id=' . $product['product_id'])
                ];
            }

            // Gift Voucher
            $json['vouchers'] = [];

            if (!empty($this->session->data['vouchers'])) {
                foreach ($this->session->data['vouchers'] as $voucher) {
                    $json['vouchers'][] = [
                        'description' => $voucher['description'],
                        'amount'      => $this->currency->format($voucher['amount'], $this->session->data['currency'])
                    ];
                }
            }

            $json['totals'] = [];

            foreach ($order_data['totals'] as $total) {
                $json['totals'][] = [
                    'title' => $total['title'],
                    'text'  => $this->currency->format($total['value'], $this->session->data['currency'])
                ];
            }
			$json['payment'] = $this->load->controller('extension/payment/' . $this->session->data['payment_method']['code']);
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
