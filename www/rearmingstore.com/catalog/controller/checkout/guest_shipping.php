<?php
class ControllerCheckoutGuestShipping extends Controller {
    public function index(): void {
        $this->load->language('checkout/checkout');

        if (isset($this->session->data['shipping_address']['firstname'])) {
            $data['firstname'] = $this->session->data['shipping_address']['firstname'];
        } else {
            $data['firstname'] = '';
        }

        if (isset($this->session->data['shipping_address']['lastname'])) {
            $data['lastname'] = $this->session->data['shipping_address']['lastname'];
        } else {
            $data['lastname'] = '';
        }

        if (isset($this->session->data['shipping_address']['company'])) {
            $data['company'] = $this->session->data['shipping_address']['company'];
        } else {
            $data['company'] = '';
        }

        if (isset($this->session->data['shipping_address']['address_1'])) {
            $data['address_1'] = $this->session->data['shipping_address']['address_1'];
        } else {
            $data['address_1'] = '';
        }

        if (isset($this->session->data['shipping_address']['address_2'])) {
            $data['address_2'] = $this->session->data['shipping_address']['address_2'];
        } else {
            $data['address_2'] = '';
        }

        if (isset($this->session->data['shipping_address']['postcode'])) {
            $data['postcode'] = $this->session->data['shipping_address']['postcode'];
        } else {
            $data['postcode'] = '';
        }

        if (isset($this->session->data['shipping_address']['city'])) {
            $data['city'] = $this->session->data['shipping_address']['city'];
        } else {
            $data['city'] = '';
        }

        if (isset($this->session->data['shipping_address']['country_id'])) {
            $data['country_id'] = (int)$this->session->data['shipping_address']['country_id'];
        } else {
            $data['country_id'] = $this->config->get('config_country_id');
        }

        if (isset($this->session->data['shipping_address']['zone_id'])) {
            $data['zone_id'] = (int)$this->session->data['shipping_address']['zone_id'];
        } else {
            $data['zone_id'] = '';
        }

        // Countries
        $this->load->model('localisation/country');

        $data['countries'] = $this->model_localisation_country->getCountries();
        
        $data['custom_fields'] = [];

        // Custom Fields
        $this->load->model('account/custom_field');

        $custom_fields = $this->model_account_custom_field->getCustomFields($this->session->data['guest']['customer_group_id']);

        foreach ($custom_fields as $custom_field) {
            if ($custom_field['location'] == 'address') {
                $data['custom_fields'][] = $custom_field;
            }
        }

        if (isset($this->session->data['shipping_address']['custom_field'])) {
            $data['address_custom_field'] = $this->session->data['shipping_address']['custom_field'];
        } else {
            $data['address_custom_field'] = [];
        }

        $this->response->setOutput($this->load->view('checkout/guest_shipping', $data));
    }

    public function save(): void {
        $this->load->language('checkout/checkout');

        $json = [];

        // Validate if customer is logged in.
        if ($this->customer->isLogged()) {
            $json['redirect'] = $this->url->link('checkout/checkout', '', true);
        }

        // Validate cart has products and has stock.
        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $json['redirect'] = $this->url->link('checkout/cart');
        }

        // Check if guest checkout is available.
        if (!$this->config->get('config_checkout_guest') || $this->config->get('config_customer_price') || $this->cart->hasDownload()) {
            $json['redirect'] = $this->url->link('checkout/checkout', '', true);
        }

        if (!$json) {
            if ((oc_strlen($this->request->post['firstname']) < 1) || (oc_strlen($this->request->post['firstname']) > 32)) {
                $json['error']['firstname'] = $this->language->get('error_firstname');
            }

            if ((oc_strlen($this->request->post['lastname']) < 1) || (oc_strlen($this->request->post['lastname']) > 32)) {
                $json['error']['lastname'] = $this->language->get('error_lastname');
            }

            if ((oc_strlen($this->request->post['address_1']) < 3) || (oc_strlen($this->request->post['address_1']) > 128)) {
                $json['error']['address_1'] = $this->language->get('error_address_1');
            }

            if ((oc_strlen($this->request->post['city']) < 2) || (oc_strlen($this->request->post['city']) > 128)) {
                $json['error']['city'] = $this->language->get('error_city');
            }

            // Countries
            $this->load->model('localisation/country');

            $country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);

            if ($country_info && $country_info['postcode_required'] && (oc_strlen($this->request->post['postcode']) < 2 || oc_strlen($this->request->post['postcode']) > 10)) {
                $json['error']['postcode'] = $this->language->get('error_postcode');
            }

            if ($this->request->post['country_id'] == '') {
                $json['error']['country'] = $this->language->get('error_country');
            }

            if (!isset($this->request->post['zone_id']) || $this->request->post['zone_id'] == '' || !is_numeric($this->request->post['zone_id'])) {
                $json['error']['zone'] = $this->language->get('error_zone');
            }

            // Custom field validation
            $this->load->model('account/custom_field');

            $custom_fields = $this->model_account_custom_field->getCustomFields($this->session->data['guest']['customer_group_id']);

            foreach ($custom_fields as $custom_field) {
                if ($custom_field['location'] == 'address') {
                    if ($custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['custom_field_id']])) {
                        $json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
                    } elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !preg_match(html_entity_decode($custom_field['validation'], ENT_QUOTES, 'UTF-8'), $this->request->post['custom_field'][$custom_field['custom_field_id']])) {
                        $json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_regex'), $custom_field['name']);
                    }
                }
            }
        }

        if (!$json) {
            $this->session->data['shipping_address']['firstname'] = $this->request->post['firstname'];
            $this->session->data['shipping_address']['lastname'] = $this->request->post['lastname'];
            $this->session->data['shipping_address']['company'] = $this->request->post['company'];
            $this->session->data['shipping_address']['address_1'] = $this->request->post['address_1'];
            $this->session->data['shipping_address']['address_2'] = $this->request->post['address_2'];
            $this->session->data['shipping_address']['postcode'] = $this->request->post['postcode'];
            $this->session->data['shipping_address']['city'] = $this->request->post['city'];
            $this->session->data['shipping_address']['country_id'] = (int)$this->request->post['country_id'];
            $this->session->data['shipping_address']['zone_id'] = (int)$this->request->post['zone_id'];

            // Countries
            $this->load->model('localisation/country');

            $country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);

            if ($country_info) {
                $this->session->data['shipping_address']['country'] = $country_info['name'];
                $this->session->data['shipping_address']['iso_code_2'] = $country_info['iso_code_2'];
                $this->session->data['shipping_address']['iso_code_3'] = $country_info['iso_code_3'];
                $this->session->data['shipping_address']['address_format'] = $country_info['address_format'];
            } else {
                $this->session->data['shipping_address']['country'] = '';
                $this->session->data['shipping_address']['iso_code_2'] = '';
                $this->session->data['shipping_address']['iso_code_3'] = '';
                $this->session->data['shipping_address']['address_format'] = '';
            }

            // Zones
            $this->load->model('localisation/zone');

            $zone_info = $this->model_localisation_zone->getZone($this->request->post['zone_id']);

            if ($zone_info) {
                $this->session->data['shipping_address']['zone'] = $zone_info['name'];
                $this->session->data['shipping_address']['zone_code'] = $zone_info['code'];
            } else {
                $this->session->data['shipping_address']['zone'] = '';
                $this->session->data['shipping_address']['zone_code'] = '';
            }

            if (isset($this->request->post['custom_field'])) {
                $this->session->data['shipping_address']['custom_field'] = $this->request->post['custom_field']['address'];
            } else {
                $this->session->data['shipping_address']['custom_field'] = [];
            }

            unset($this->session->data['shipping_method']);
            unset($this->session->data['shipping_methods']);
			
			$this->load->language('checkout/checkout');
			// Validate cart has products and has stock.
			if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
				$json['redirect'] = $this->url->link('checkout/cart');
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
					$json['redirect'] = $this->url->link('checkout/cart');
					break;
				}
			}

			if (!isset($this->request->post['payment_method'])) {
				$json['error']['warning'] = $this->language->get('error_payment');
			} elseif (!isset($this->session->data['payment_methods'][$this->request->post['payment_method']])) {
				$json['error']['warning'] = $this->language->get('error_payment');
			}

			if ($this->config->get('config_checkout_id')) {
				// Information
				$this->load->model('catalog/information');

				$information_info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

				if ($information_info && !isset($this->request->post['agree'])) {
					$json['error']['warning'] = sprintf($this->language->get('error_agree'), $information_info['title']);
				}
			}

			if (!$json) {
				$this->session->data['payment_method'] = $this->session->data['payment_methods'][$this->request->post['payment_method']];

				$this->session->data['comment'] = strip_tags($this->request->post['comment']);
			}
        }
		var_dump($json);
		die();
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}