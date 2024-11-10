<?php
class ControllerProductProduct extends Controller {
    private array $error = [];

    public function index(): void {
        $this->load->language('product/product');

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => 'Home',
            'href' => $this->url->link('common/home')
        ];

        // Categories
        $this->load->model('catalog/category');

        if (isset($this->request->get['path'])) {
            $path = '';

            $parts = explode('_', (string)$this->request->get['path']);
            $category_id = (int)array_pop($parts);

            foreach ($parts as $path_id) {
                if (!$path) {
                    $path = $path_id;
                } else {
                    $path .= '_' . $path_id;
                }

                $category_info = $this->model_catalog_category->getCategory($path_id);

                if ($category_info) {
                    $data['breadcrumbs'][] = [
                        'text' => $category_info['name'],
                        'href' => $this->url->link('product/category', 'path=' . $path)
                    ];
                }
            }

            // Set the last category breadcrumb
            $category_info = $this->model_catalog_category->getCategory($category_id);

            if ($category_info) {
                $url = '';

                if (isset($this->request->get['sort'])) {
                    $url .= '&sort=' . $this->request->get['sort'];
                }

                if (isset($this->request->get['order'])) {
                    $url .= '&order=' . $this->request->get['order'];
                }

                if (isset($this->request->get['page'])) {
                    $url .= '&page=' . $this->request->get['page'];
                }

                if (isset($this->request->get['limit'])) {
                    $url .= '&limit=' . $this->request->get['limit'];
                }

                $data['breadcrumbs'][] = [
                    'text' => $category_info['name'],
                    'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url)
                ];
            }
        }

        // Manufacturers
        $this->load->model('catalog/manufacturer');

        if (isset($this->request->get['manufacturer_id'])) {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('text_brand'),
                'href' => $this->url->link('product/manufacturer')
            ];

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($this->request->get['manufacturer_id']);

            if ($manufacturer_info) {
                $data['breadcrumbs'][] = [
                    'text' => $manufacturer_info['name'],
                    'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
                ];
            }
        }

        if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
            $url = '';

            if (isset($this->request->get['search'])) {
                $url .= '&search=' . $this->request->get['search'];
            }

            if (isset($this->request->get['tag'])) {
                $url .= '&tag=' . $this->request->get['tag'];
            }

            if (isset($this->request->get['description'])) {
                $url .= '&description=' . $this->request->get['description'];
            }

            if (isset($this->request->get['category_id'])) {
                $url .= '&category_id=' . $this->request->get['category_id'];
            }

            if (isset($this->request->get['sub_category'])) {
                $url .= '&sub_category=' . $this->request->get['sub_category'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['breadcrumbs'][] = [
                'text' => $this->language->get('text_search'),
                'href' => $this->url->link('product/search', $url)
            ];
        }

        if (isset($this->request->get['product_id'])) {
            $product_id = (int)$this->request->get['product_id'];
        } else {
            $product_id = 0;
        }

        // Products
        $this->load->model('catalog/product');

        $product_info = $this->model_catalog_product->getProduct($product_id);

        // Check product page open from cateory page
        if (isset($this->request->get['path'])) {
            $parts = explode('_', (string)$this->request->get['path']);

            if (empty($this->model_catalog_product->checkProductCategories($product_id, $parts))) {
                $product_info = [];
            }
        }

        // Check product page open from manufacturer page
        if (isset($this->request->get['manufacturer_id']) && $product_info) {
            if ($product_info['manufacturer_id'] != $this->request->get['manufacturer_id']) {
                $product_info = [];
            }
        }

        if ($product_info) {
            $url = '';

            if (array_key_exists('name_option_slider', $product_info)) {
                $data['name_option_slider'] = $product_info['name_option_slider'];
            } else {
                $data['name_option_slider'] = 'No option';
            }
            if (array_key_exists('max_value_option_slider', $product_info)) {
                $data['max_value_option_slider'] = $product_info['max_value_option_slider'];
            } else {
                $data['max_value_option_slider'] = '0';
            }
            if (array_key_exists('min_value_option_slider', $product_info)) {
                $data['min_value_option_slider'] = $product_info['min_value_option_slider'];
            } else {
                $data['min_value_option_slider'] = '0';
            }
            if (array_key_exists('percent_value_slider', $product_info)) {
                $data['percent_value_slider'] = $product_info['percent_value_slider'];
            } else {
                $data['percent_value_slider'] = '0';
            }
       
            if (isset($this->request->get['path'])) {
                $url .= '&path=' . $this->request->get['path'];
            }

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['manufacturer_id'])) {
                $url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
            }

            if (isset($this->request->get['search'])) {
                $url .= '&search=' . $this->request->get['search'];
            }

            if (isset($this->request->get['tag'])) {
                $url .= '&tag=' . $this->request->get['tag'];
            }

            if (isset($this->request->get['description'])) {
                $url .= '&description=' . $this->request->get['description'];
            }

            if (isset($this->request->get['category_id'])) {
                $url .= '&category_id=' . $this->request->get['category_id'];
            }

            if (isset($this->request->get['sub_category'])) {
                $url .= '&sub_category=' . $this->request->get['sub_category'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }
            $this->document->setTitle($product_info['meta_title']);
            $this->document->setDescription($product_info['meta_description']);
            $this->document->setKeywords($product_info['meta_keyword']);

            $this->document->addLink($this->url->link('product/product', 'product_id=' . $this->request->get['product_id']), 'canonical');

            $this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');

            $this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');

            $this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
            $this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
            $this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');

            $this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');
			$this->document->addClass('topNavPage');

            $data['heading_title'] = $product_info['name'];
            $data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
            $data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

            // Reviews
            $this->load->model('catalog/review');

            $data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);
            $data['product_id'] = (int)$this->request->get['product_id'];
            $data['manufacturer'] = $product_info['manufacturer'];
            $data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
            $data['model'] = $product_info['model'];
            $data['reward'] = $product_info['reward'];
            $data['points'] = $product_info['points'];
            $data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');

            $data['timestart'] = html_entity_decode($product_info['timestart'], ENT_QUOTES, 'UTF-8');
            $data['timecomplete'] = html_entity_decode($product_info['timecomplete'], ENT_QUOTES, 'UTF-8');
            $data['why'] = html_entity_decode($product_info['why'], ENT_QUOTES, 'UTF-8');
            $data['payments'] = html_entity_decode($product_info['payments'], ENT_QUOTES, 'UTF-8');

            if ($product_info['quantity'] <= 0) {
                $data['stock'] = $product_info['stock_status'];
            } elseif ($this->config->get('config_stock_display')) {
                $data['stock'] = $product_info['quantity'];
            } else {
                $data['stock'] = $this->language->get('text_instock');
            }

            // Image files
            $this->load->model('tool/image');

            if ($product_info['image']) {
                $data['popup'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
            } else {
                $data['popup'] = '';
            }

            if ($product_info['image']) {
                $data['thumb'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
            } else {
                $data['thumb'] = '';
            }
			$data['image'] = $data['thumb'];

            $data['images'] = [];

            $results = $this->model_catalog_product->getImages($this->request->get['product_id']);

            foreach ($results as $result) {
                $data['images'][] = [
                    'popup' => $this->model_tool_image->resize($result['image'], 769, 155),
                    'thumb' => $this->model_tool_image->resize($result['image'], 360, 200)
                ];
            }
			if(isset($data['images'][0])){
				$data['image'] = $data['images'][0]['popup'];
				$data['thumb'] = $data['images'][0]['thumb'];
			}

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $data['price'] = false;
            }

            if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
                $data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

                $tax_price = (float)$product_info['special'];
            } else {
                $data['special'] = false;

                $tax_price = (float)$product_info['price'];
            }

            if ($this->config->get('config_tax')) {
                $data['tax'] = $this->currency->format($tax_price, $this->session->data['currency']);
            } else {
                $data['tax'] = false;
            }

            $discounts = $this->model_catalog_product->getDiscounts($this->request->get['product_id']);

            $data['discounts'] = [];

            foreach ($discounts as $discount) {
                $data['discounts'][] = [
                    'quantity' => $discount['quantity'],
                    'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
                ];
            }

            $data['options'] = [];

            foreach ($this->model_catalog_product->getOptions($this->request->get['product_id']) as $option) {
                $product_option_value_data = [];

                foreach ($option['product_option_value'] as $option_value) {
                    if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
                        if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
                            $price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
                        } else {
                            $price = false;
                        }

                        $product_option_value_data[] = [
                            'product_option_value_id' => $option_value['product_option_value_id'],
                            'option_value_id'         => $option_value['option_value_id'],
                            'name'                    => $option_value['name'],
                            'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
                            'price'                   => $price,
                            'price_prefix'            => $option_value['price_prefix']
                        ];
                    }
                }

                $data['options'][] = [
                    'product_option_id'    => $option['product_option_id'],
                    'product_option_value' => $product_option_value_data,
                    'option_id'            => $option['option_id'],
                    'name'                 => $option['name'],
                    'type'                 => $option['type'],
                    'value'                => $option['value'],
                    'required'             => $option['required']
                ];
            }

            // Subscriptions
            $data['subscription_plans'] = [];

            $results = $this->model_catalog_product->getSubscriptions($product_id);

            foreach ($results as $result) {
                // Subscription
                $description = '';

                $trial_price = $this->currency->format($this->tax->calculate($result['trial_price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                $trial_cycle = $result['trial_cycle'];
                $trial_frequency = $this->language->get('text_' . $result['trial_frequency']);
                $trial_duration = $result['trial_duration'];

                if ($result['trial_status']) {
                    $description .= sprintf($this->language->get('text_subscription_trial'), $trial_price, $trial_cycle, $trial_frequency, $trial_duration);
                }

                $price = $this->currency->format($this->tax->calculate($result['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                $cycle = $result['cycle'];
                $frequency = $this->language->get('text_' . $result['frequency']);
                $duration = $result['duration'];

                if ($duration) {
                    $description .= sprintf($this->language->get('text_subscription_duration'), $price, $cycle, $frequency, $duration);
                } else {
                    $description .= sprintf($this->language->get('text_subscription_cancel'), $price, $cycle, $frequency);
                }

                $data['subscription_plans'][] = [
                    'subscription_plan_id' => $result['subscription_plan_id'],
                    'name'                 => $result['name'],
                    'description'          => $description
                ];
            }

            if ($product_info['minimum']) {
                $data['minimum'] = $product_info['minimum'];
            } else {
                $data['minimum'] = 1;
            }

            $data['review_status'] = $this->config->get('config_review_status');

            if ($this->config->get('config_review_guest') || $this->customer->isLogged()) {
                $data['review_guest'] = true;
            } else {
                $data['review_guest'] = false;
            }

            if ($this->customer->isLogged()) {
                $data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
            } else {
                $data['customer_name'] = '';
            }

            // Captcha
            if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
                $data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
            } else {
                $data['captcha'] = '';
            }

            $data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);
            $data['rating'] = (int)$product_info['rating'];
            $data['share'] = $this->url->link('product/product', 'product_id=' . (int)$this->request->get['product_id']);

            $data['attribute_groups'] = $this->model_catalog_product->getAttributes($this->request->get['product_id']);

            $data['products'] = [];

            $results = $this->model_catalog_product->getRelated($this->request->get['product_id']);

            foreach ($results as $result) {
                if ($result['image']) {
                    $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if (!is_null($result['special']) && (float)$result['special'] >= 0) {
                    $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

                    $tax_price = (float)$result['special'];
                } else {
                    $special = false;

                    $tax_price = (float)$result['price'];
                }

                if ($this->config->get('config_tax')) {
                    $tax = $this->currency->format($tax_price, $this->session->data['currency']);
                } else {
                    $tax = false;
                }

                if ($this->config->get('config_review_status')) {
                    $rating = (int)$result['rating'];
                } else {
                    $rating = false;
                }

                $data['products'][] = [
                    'product_id'  => $result['product_id'],
                    'thumb'       => $image,
                    'name'        => $result['name'],
                    'tag'        => $result['tag'],
                    'description' => oc_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                    'price'       => $price,
                    'special'     => $special,
                    'tax'         => $tax,
                    'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
                    'rating'      => $rating,
                    'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
                ];
            }

            $data['tags_prod'] = [];
            $data['tags'] = [];
            $data['pids'] = [];


            if ($product_info['tag']) {
                $tags = explode(',', $product_info['tag']);

                foreach ($tags as $tag) {
                    $data['tags'][] = [
                        'tag'  => trim($tag),
                        'href' => $this->url->link('product/search', 'tag=' . trim($tag))
                    ];
                }
            }

            if (!empty($data['tags'])) {
                $first_tag = $data['tags'][0]['tag'];
                $product_id = isset($this->request->get['product_id']) ? $this->request->get['product_id'] : '';

                if (trim($first_tag) == 'US SERVERS') {
                    $data['tags_prod'][0] = array(
                        'tag' => $first_tag,
                        'href' => $this->url->link('product/product', 'product_id=' . $product_id),
                        'active' => 'active'
                    );
                } else {
                    $data['tags_prod'][1] = array(
                        'tag' => $first_tag,
                        'href' => $this->url->link('product/product', 'product_id=' . $product_id),
                        'active' => 'active'
                    );
                }

                if (!empty($data['products'])) {
                    $first_product_id = $data['products'][0]['product_id'];
                    $data['pids'][] = $first_product_id;
                }
            }

            $data['tags_prod'] = [];


            $data['tags_prod'][0] = array(
	            'tag' => $first_tag,
	            'href' => $this->url->link('product/product', 'product_id=' . $product_id),
	            'active' => 'active'
             );


	        $qq = $this->db->query("SELECT `pd`.`product_id`, `pd`.`tag` FROM `" . DB_PREFIX . "product_related` `pr`
	        LEFT JOIN `" . DB_PREFIX . "product` `p` ON (`pr`.`related_id` = `p`.`product_id`)
	        LEFT JOIN `" . DB_PREFIX . "product_to_store` `p2s` ON (`pr`.`related_id` = `p2s`.`product_id`)
	        LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`pr`.`related_id` = `pd`.`product_id`)
	        WHERE `pr`.`product_id` = '" . (int)$product_id . "'
	        and `p`.`status`='1'
	        AND `p2s`.`store_id` = '" . (int)$this->config->get('config_store_id') . "'");

			if($qq){
				foreach($qq->rows as $rr){
                    $data['tags_prod'][] = array(
                        'tag' => $rr['tag'],
                        'href' => $this->url->link('product/product', 'product_id=' . $rr['product_id']),
                        'active' => ''
                    );
				}
			}



			//echo '<!--//';
			//print_r($qq);
			//echo '//-->';


            $data['prod_category'] = [];


	        $qq = $this->db->query("SELECT `ptc`.`category_id`, `cd`.`name` FROM `" . DB_PREFIX . "product_to_category` `ptc`
	        LEFT JOIN `" . DB_PREFIX . "category_description` `cd` ON (`cd`.`category_id` = `ptc`.`category_id`)
	        WHERE `ptc`.`product_id` = '" . (int)$product_id . "'
	        and `cd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

			if($qq){
				foreach($qq->rows as $rr){
                    $data['prod_category'][] = [
                        'text' => $rr['name'],
                        'href' => $this->url->link('product/category', 'path=' . $rr['category_id'])
                    ];
				}
			}

			sort($data['prod_category']);


			sort($data['tags_prod']);

            $data['subscriptions'] = $this->model_catalog_product->getSubscriptions($this->request->get['product_id']);

            $this->model_catalog_product->updateViewed($this->request->get['product_id']);

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');


			// Get the current product's category path
			$product_categories = $this->model_catalog_product->getCategories($product_id);

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

			$breadcrumbs = array_reverse($this->getCategoryBreadcrumbs($category_info['category_id']));

			foreach ($breadcrumbs as $breadcrumb) {
				$data['breadcrumbs'][] = [
					'text' => $breadcrumb['text'],
					'href' => $breadcrumb['href']
				];
			}
			$data['breadcrumbs'][] = [
                'text' => $product_info['name'],
                'href' => 0
            ];
			$filter_data = array(
				'filter_category_id' => $longest_path_category_id,
				'start'             => 0,
				'limit'             => 20,
				'filter_tag'        => 'US SERVERS',
			);

			$category_products = $this->model_catalog_product->getProducts($filter_data);

			$data['category_products'] = array();

			foreach ($category_products as $product) {
				$class='';
				if(in_array($product['product_id'],$data['pids'])){
					$class='active';
				}
				$data['category_products'][] = array(
					'product_id'  => $product['product_id'],
					'name'        => $product['name'],
					'price'       => $product['price'],
					'href'        => $this->url->link('product/product', 'product_id=' . $product['product_id']),
					'class'       =>$class,

				);
			}

			$data['price2'] = str_replace(',','',$data['price']);
			$data['price2'] = str_replace('$','',$data['price2']);

            $this->response->setOutput($this->load->view('product/product', $data));
        } else {
            $url = '';

            if (isset($this->request->get['path'])) {
                $url .= '&path=' . $this->request->get['path'];
            }

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['manufacturer_id'])) {
                $url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
            }

            if (isset($this->request->get['search'])) {
                $url .= '&search=' . $this->request->get['search'];
            }

            if (isset($this->request->get['tag'])) {
                $url .= '&tag=' . $this->request->get['tag'];
            }

            if (isset($this->request->get['description'])) {
                $url .= '&description=' . $this->request->get['description'];
            }

            if (isset($this->request->get['category_id'])) {
                $url .= '&category_id=' . $this->request->get['category_id'];
            }

            if (isset($this->request->get['sub_category'])) {
                $url .= '&sub_category=' . $this->request->get['sub_category'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['breadcrumbs'][] = [
                'text' => $this->language->get('text_error'),
                'href' => $this->url->link('product/product', $url . '&product_id=' . $product_id)
            ];

            $this->document->setTitle($this->language->get('text_error'));

            $data['continue'] = $this->url->link('common/home');

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        }
    }
	// Helper function to get the category breadcrumbs
	protected function getCategoryBreadcrumbs($category_id) {
		$breadcrumbs = array();

		while ($category_id) {
			$category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {
				$breadcrumbs[] = array(
					'href' => $this->url->link('product/category', 'path=' . $category_info['category_id']),
					'text' => $category_info['name']
				);

				$category_id = $category_info['parent_id'];
			} else {
				break;
			}
		}

		return $breadcrumbs;
	}

	// Helper function to get the category path
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
    public function review(): void {
        $this->load->language('product/product');

        // Reviews
        $this->load->model('catalog/review');

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $data['reviews'] = [];

        $review_total = $this->model_catalog_review->getTotalReviewsByProductId($this->request->get['product_id']);
        $results = $this->model_catalog_review->getReviewsByProductId($this->request->get['product_id'], ($page - 1) * 5, 5);

        foreach ($results as $result) {
            $data['reviews'][] = [
                'author'     => $result['author'],
                'text'       => nl2br($result['text']),
                'rating'     => (int)$result['rating'],
                'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
            ];
        }

        $pagination = new \Pagination();
        $pagination->total = $review_total;
        $pagination->page = $page;
        $pagination->limit = 5;
        $pagination->url = $this->url->link('product/product/review', 'product_id=' . $this->request->get['product_id'] . '&page={page}');

        $data['pagination'] = $pagination->render();
        $data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));

        $this->response->setOutput($this->load->view('product/review', $data));
    }

    public function write(): void {
        $this->load->language('product/product');

        $json = [];

        if (isset($this->request->get['product_id'])) {
            $product_id = (int)$this->request->get['product_id'];
        } else {
            $product_id = 0;
        }

        // Products
        $this->load->model('catalog/product');

        $product_info = $this->model_catalog_product->getProduct($product_id);

        if (!$product_info) {
            $json['error'] = $this->language->get('error_product');
        }

        if (!$json) {
            if ($this->request->server['REQUEST_METHOD'] == 'POST') {
                if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 25)) {
                    $json['error'] = $this->language->get('error_name');
                }

                if ((oc_strlen($this->request->post['text']) < 25) || (oc_strlen($this->request->post['text']) > 1000)) {
                    $json['error'] = $this->language->get('error_text');
                }

                if (empty($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
                    $json['error'] = $this->language->get('error_rating');
                }

                // Captcha
                if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
                    $captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

                    if ($captcha) {
                        $json['error'] = $captcha;
                    }
                }
            }
        }

        if (!$json) {
            // Reviews
            $this->load->model('catalog/review');

            $this->model_catalog_review->addReview($product_id, $this->request->post);

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
