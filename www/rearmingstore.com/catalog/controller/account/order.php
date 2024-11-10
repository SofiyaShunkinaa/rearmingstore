<?php
class ControllerAccountOrder extends Controller {
    public function index(): void {
		$this->document->addClass('topNavPage');
        if (!$this->customer->isLogged() || (!isset($this->request->get['customer_token']) || !isset($this->session->data['customer_token']) || ($this->request->get['customer_token'] != $this->session->data['customer_token']))) {
            $this->session->data['redirect'] = $this->url->link('account/order', '', true);

            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->language('account/order');

        $this->document->setTitle($this->language->get('heading_title'));

        $url = '';

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => 'Home',
            'href' => $this->url->link('common/home')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_account'),
            'href' => $this->url->link('account/account', 'customer_token=' . $this->session->data['customer_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            //'href' => $this->url->link('account/order', 'customer_token=' . $this->session->data['customer_token'] . $url, true)
        ];

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

		$limit = 10;

        $data['orders'] = [];

        // Orders
        $this->load->model('account/order');

        $order_total = $this->model_account_order->getTotalOrders();

        $results = $this->model_account_order->getOrders(($page - 1) * $limit, $limit);
		$this->load->model('catalog/product');
		$this->load->model('catalog/category');
		
        foreach ($results as $result) {
            $product_total = $this->model_account_order->getTotalOrderProductsByOrderId($result['order_id']);

            $voucher_total = $this->model_account_order->getTotalOrderVouchersByOrderId($result['order_id']);
			$order_info = $this->model_account_order->getOrder($result['order_id']);
			$products = $this->model_account_order->getProducts($result['order_id']);
			
			
			foreach ($products as $product) {
                $option_data = [];

                $options = $this->model_account_order->getOptions($result['order_id'], $product['order_product_id']);

                foreach ($options as $option) {
                    if ($option['type'] != 'file') {
                        $value = $option['value'];
                    }
                    $option_data[] = [
                        'name'  => $option['name'],
                        'value' => (oc_strlen($value) > 20 ? oc_substr($value, 0, 20) . '..' : $value)
                    ];
                }

                $product_info = $this->model_catalog_product->getProduct($product['product_id']);
				if($result['status'] == 'Complete'){$statuscls = 'active';}else{$statuscls = '';}
				
				// Get the current product's category path
				$product_categories = $this->model_catalog_product->getCategories($product['product_id']);

				// Find the category with the longest path
				$longest_path = '';
				$longest_path_category_id = 0;

				foreach ($product_categories as $product_category) {
					$category_path = $this->getCategoryPath($product_category['category_id']);

					if (strlen($category_path) > strlen($longest_path)) {
						$longest_path = $category_path;
						$longest_path_category_id = $product_category['category_id'];
					}
				}

				// Get the category data for the category with the longest path
				$this->load->model('catalog/category');
				$category_info = $this->model_catalog_category->getCategory($longest_path_category_id);
				if(isset($category_info['name'])){
					$catname = $category_info['name'];
				}else{
					$catname = '';
				}
				
                $data['orders'][] = [
					'order_id'  => $result['order_id'],
                    'name'      => $product['name'],
                    'catname'   => $catname,
                    'model'     => $product['model'],
					'status'    => $result['status'],
					'statuscls' => $result['status'],
					'server'    => $product_info['tag'],
					'date_added'=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                    'option'    => $option_data,
                    'quantity'  => $product['quantity'],
                    'price'     => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
                    'total'     => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']),
					'view'      => $this->url->link('account/order/info', 'customer_token=' . $this->session->data['customer_token'] . '&order_id=' . $result['order_id'], true),
				];
            }
        }

        $pagination = new \Pagination();
        $pagination->total = $order_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->url = $this->url->link('account/order', 'customer_token=' . $this->session->data['customer_token'] . '&page={page}', true);

        $data['pagination'] = $pagination->render();
        $data['results'] = sprintf($this->language->get('text_pagination'), ($order_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($order_total - $limit)) ? $order_total : ((($page - 1) * $limit) + $limit), $order_total, ceil($order_total / $limit));
        $data['continue'] = $this->url->link('account/account', 'customer_token=' . $this->session->data['customer_token'], true);

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('account/order_list', $data));
    }
	protected function getCategoryPath($category_id) {
		$path = '';

		$category_info = $this->model_catalog_category->getCategory($category_id);

		if ($category_info) {
			$path .= $category_info['name'];

			if ($category_info['parent_id']) {
				$path = $this->getCategoryPath($category_info['parent_id']) . ' &gt; ' . $path;
			}
		}

		return $path;
	}
    public function info(): object|null {
		$this->document->addClass('topNavPage');
        $this->load->language('account/order');

        if (isset($this->request->get['order_id'])) {
            $order_id = (int)$this->request->get['order_id'];
        } else {
            $order_id = 0;
        }

        if (!$this->customer->isLogged() || (!isset($this->request->get['customer_token']) || !isset($this->session->data['customer_token']) || ($this->request->get['customer_token'] != $this->session->data['customer_token']))) {
            $this->session->data['redirect'] = $this->url->link('account/order/info', 'order_id=' . $order_id, true);

            $this->response->redirect($this->url->link('account/login', '', true));
        }

        // Orders
        $this->load->model('account/order');

        $order_info = $this->model_account_order->getOrder($order_id);

        if ($order_info) {
            $this->document->setTitle($this->language->get('text_order'));

            $url = '';

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $data['breadcrumbs'] = [];

            $data['breadcrumbs'][] = [
                'text' => 'Home',
                'href' => $this->url->link('common/home')
            ];

            $data['breadcrumbs'][] = [
                'text' => $this->language->get('text_account'),
                'href' => $this->url->link('account/account', 'customer_token=' . $this->session->data['customer_token'], true)
            ];

            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('account/order', 'customer_token=' . $this->session->data['customer_token'] . $url, true)
            ];

            $data['breadcrumbs'][] = [
                'text' => $this->language->get('text_order'),
                //'href' => $this->url->link('account/order/info', 'customer_token=' . $this->session->data['customer_token'] . '&order_id=' . $this->request->get['order_id'] . $url, true)
            ];

            if (isset($this->session->data['error'])) {
                $data['error_warning'] = $this->session->data['error'];

                unset($this->session->data['error']);
            } else {
                $data['error_warning'] = '';
            }

            if (isset($this->session->data['success'])) {
                $data['success'] = $this->session->data['success'];

                unset($this->session->data['success']);
            } else {
                $data['success'] = '';
            }

            if ($order_info['invoice_no']) {
                $data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
            } else {
                $data['invoice_no'] = '';
            }

            $data['order_id'] = (int)$this->request->get['order_id'];
            $data['date_added'] = date($this->language->get('date_format_short'), strtotime($order_info['date_added']));

            // Payment Address
            if ($order_info['payment_address_format']) {
                $format = $order_info['payment_address_format'];
            } else {
                $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
            }

            $find = [
                '{firstname}',
                '{lastname}',
                '{company}',
                '{address_1}',
                '{address_2}',
                '{city}',
                '{postcode}',
                '{zone}',
                '{zone_code}',
                '{country}'
            ];

            $replace = [
                'firstname' => $order_info['payment_firstname'],
                'lastname'  => $order_info['payment_lastname'],
                'company'   => $order_info['payment_company'],
                'address_1' => $order_info['payment_address_1'],
                'address_2' => $order_info['payment_address_2'],
                'city'      => $order_info['payment_city'],
                'postcode'  => $order_info['payment_postcode'],
                'zone'      => $order_info['payment_zone'],
                'zone_code' => $order_info['payment_zone_code'],
                'country'   => $order_info['payment_country']
            ];

            $data['payment_address'] = str_replace(["\r\n", "\r", "\n"], '<br/>', preg_replace(["/\s\s+/", "/\r\r+/", "/\n\n+/"], '<br/>', trim(str_replace($find, $replace, $format))));

            $data['payment_method'] = $order_info['payment_method'];

            // Shipping Address
            if ($order_info['shipping_address_format']) {
                $format = $order_info['shipping_address_format'];
            } else {
                $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
            }

            $find = [
                '{firstname}',
                '{lastname}',
                '{company}',
                '{address_1}',
                '{address_2}',
                '{city}',
                '{postcode}',
                '{zone}',
                '{zone_code}',
                '{country}'
            ];

            $replace = [
                'firstname' => $order_info['shipping_firstname'],
                'lastname'  => $order_info['shipping_lastname'],
                'company'   => $order_info['shipping_company'],
                'address_1' => $order_info['shipping_address_1'],
                'address_2' => $order_info['shipping_address_2'],
                'city'      => $order_info['shipping_city'],
                'postcode'  => $order_info['shipping_postcode'],
                'zone'      => $order_info['shipping_zone'],
                'zone_code' => $order_info['shipping_zone_code'],
                'country'   => $order_info['shipping_country']
            ];

            $data['shipping_address'] = str_replace(["\r\n", "\r", "\n"], '<br/>', preg_replace(["/\s\s+/", "/\r\r+/", "/\n\n+/"], '<br/>', trim(str_replace($find, $replace, $format))));

            $data['shipping_method'] = $order_info['shipping_method'];

            // Uploaded files
            $this->load->model('tool/upload');

            // Products
            $this->load->model('catalog/product');

            // Products
            $data['products'] = [];

            $products = $this->model_account_order->getProducts($this->request->get['order_id']);

            foreach ($products as $product) {
                $option_data = [];

                $options = $this->model_account_order->getOptions($this->request->get['order_id'], $product['order_product_id']);

                foreach ($options as $option) {
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

                $product_info = $this->model_catalog_product->getProduct($product['product_id']);

                if ($product_info) {
                    $reorder = $this->url->link('account/order/reorder', 'customer_token=' . $this->session->data['customer_token'] . '&order_id=' . $order_id . '&order_product_id=' . $product['order_product_id'], true);
                } else {
                    $reorder = '';
                }

                $data['products'][] = [
                    'name'     => $product['name'],
                    'model'    => $product['model'],
                    'option'   => $option_data,
                    'quantity' => $product['quantity'],
                    'price'    => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
                    'total'    => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']),
                    'reorder'  => $reorder,
                    'returns'  => $this->url->link('account/returns/add', 'order_id=' . $order_info['order_id'] . '&product_id=' . $product['product_id'], true)
                ];
            }

            // Voucher
            $data['vouchers'] = [];

            $vouchers = $this->model_account_order->getVouchers($this->request->get['order_id']);

            foreach ($vouchers as $voucher) {
                $data['vouchers'][] = [
                    'description' => $voucher['description'],
                    'amount'      => $this->currency->format($voucher['amount'], $order_info['currency_code'], $order_info['currency_value'])
                ];
            }

            // Totals
            $data['totals'] = [];

            $totals = $this->model_account_order->getTotals($this->request->get['order_id']);

            foreach ($totals as $total) {
                $data['totals'][] = [
                    'title' => $total['title'],
                    'text'  => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value']),
                ];
            }

            $data['comment'] = nl2br($order_info['comment']);

            // History
            $data['histories'] = [];

            $results = $this->model_account_order->getHistories($this->request->get['order_id']);

            foreach ($results as $result) {
                $data['histories'][] = [
                    'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                    'status'     => $result['status'],
                    'comment'    => $result['notify'] ? nl2br($result['comment']) : ''
                ];
            }

            $data['continue'] = $this->url->link('account/order', 'customer_token=' . $this->session->data['customer_token'], true);

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('account/order_info', $data));
        } else {
            return new \Action('error/not_found');
        }

        return null;
    }

    public function reorder(): void {
		$this->document->addClass('topNavPage');
        if (!$this->customer->isLogged() || (!isset($this->request->get['customer_token']) || !isset($this->session->data['customer_token']) || ($this->request->get['customer_token'] != $this->session->data['customer_token']))) {
            $this->session->data['redirect'] = $this->url->link('account/order', '', true);

            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->language('account/order');

        if (isset($this->request->get['order_id'])) {
            $order_id = (int)$this->request->get['order_id'];
        } else {
            $order_id = 0;
        }

        // Orders
        $this->load->model('account/order');

        $order_info = $this->model_account_order->getOrder($order_id);

        if ($order_info) {
            if (isset($this->request->get['order_product_id'])) {
                $order_product_id = (int)$this->request->get['order_product_id'];
            } else {
                $order_product_id = 0;
            }

            $order_product_info = $this->model_account_order->getProduct($order_id, $order_product_id);

            if ($order_product_info) {
                // Products
                $this->load->model('catalog/product');

                $product_info = $this->model_catalog_product->getProduct($order_product_info['product_id']);

                if ($product_info) {
                    $option_data = [];

                    $order_options = $this->model_account_order->getOptions($order_product_info['order_id'], $order_product_id);

                    foreach ($order_options as $order_option) {
                        if ($order_option['type'] == 'select' || $order_option['type'] == 'radio' || $order_option['type'] == 'image') {
                            $option_data[$order_option['product_option_id']] = $order_option['product_option_value_id'];
                        } elseif ($order_option['type'] == 'checkbox') {
                            $option_data[$order_option['product_option_id']][] = $order_option['product_option_value_id'];
                        } elseif ($order_option['type'] == 'text' || $order_option['type'] == 'textarea' || $order_option['type'] == 'date' || $order_option['type'] == 'datetime' || $order_option['type'] == 'time') {
                            $option_data[$order_option['product_option_id']] = $order_option['value'];
                        } elseif ($order_option['type'] == 'file') {
                            $option_data[$order_option['product_option_id']] = $order_option['value'];
                        }
                    }

                    $this->cart->add($order_product_info['product_id'], $order_product_info['quantity'], $option_data);

                    $this->session->data['success'] = sprintf($this->language->get('text_success'), $this->url->link('product/product', 'product_id=' . $product_info['product_id']), $product_info['name'], $this->url->link('checkout/cart'));

                    unset($this->session->data['shipping_method']);
                    unset($this->session->data['shipping_methods']);
                    unset($this->session->data['payment_method']);
                    unset($this->session->data['payment_methods']);
                } else {
                    $this->session->data['error'] = sprintf($this->language->get('error_reorder'), $order_product_info['name']);
                }
            }
        }

        $this->response->redirect($this->url->link('account/order/info', 'customer_token=' . $this->session->data['customer_token'] . '&order_id=' . $order_id));
    }
}