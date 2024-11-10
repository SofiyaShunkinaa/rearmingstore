<?php
class ControllerCommonFooter extends Controller {
    public function index(): string {
        $this->load->language('common/footer');

        // Information
        $this->load->model('catalog/information');

        $data['informations'] = [];

        foreach ($this->model_catalog_information->getInformations() as $result) {
            if ($result['bottom']) {
                $data['informations'][] = [
                    'title' => $result['title'],
                    'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
                ];
            }
        }

        if ($this->config->get('config_gdpr_id')) {
            $data['gdpr'] = $this->url->link('information/gdpr');
        } else {
            $data['gdpr'] = '';
        }

        // Affiliate
        if ($this->config->get('config_affiliate_status')) {
            $data['affiliate'] = $this->url->link('account/affiliate', (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''), true);
        } else {
            $data['affiliate'] = '';
        }

        $data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

        // Whos Online
        if ($this->config->get('config_customer_online')) {
            // Online
            $this->load->model('tool/online');

            if (isset($this->request->server['HTTP_X_REAL_IP'])) {
                $ip = $this->request->server['HTTP_X_REAL_IP'];
            } elseif (isset($this->request->server['REMOTE_ADDR'])) {
                $ip = $this->request->server['REMOTE_ADDR'];
            } else {
                $ip = '';
            }

            if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
                $url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
            } else {
                $url = '';
            }

            if (isset($this->request->server['HTTP_REFERER'])) {
                $referer = $this->request->server['HTTP_REFERER'];
            } else {
                $referer = '';
            }

            $this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
        }
		$this->load->language('common/menu');
			
		$this->load->model('catalog/product'); 
		$this->load->model('tool/image');
		$this->load->model( 'extension/menu/megamenu' );
		
		$this->language->load('extension/module/pavmegamenu');
		$data['store_id'] = 2;

		$parent = 0;
		
		$data['treemenu'] = $this->model_extension_menu_megamenu->getTree( $parent, true, 2, array());
		
		
		$template = 'extension/module/pavmegamenuhead';

        $data['foot_m_1'] = $this->load->view($template, $data);
		$data['treemenu'] = $this->model_extension_menu_megamenu->getTree( $parent, true, 3, array());
		$data['store_id'] = 3;
        $data['foot_m_2'] = $this->load->view($template, $data);
		
        $data['contact'] = $this->url->link('information/contact');
        $data['returns'] = $this->url->link('account/returns/add', '', true);
        $data['sitemap'] = $this->url->link('information/sitemap');
        $data['tracking'] = $this->url->link('information/tracking');
        $data['manufacturer'] = $this->url->link('product/manufacturer');
        $data['special'] = $this->url->link('product/special');
        $data['voucher'] = $this->url->link('account/voucher', (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''), true);
        $data['account'] = $this->url->link('account/account', (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''), true);
        $data['order'] = $this->url->link('account/order', (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''), true);
        $data['wishlist'] = $this->url->link('account/wishlist', (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''), true);
        $data['newsletter'] = $this->url->link('account/newsletter', (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''), true);
        $data['scripts'] = $this->document->getScripts('footer');
        $data['styles'] = $this->document->getStyles('footer');
		
        $data['f_mail'] = $this->config->get('config_f_mail');
        $data['f_phone'] = $this->config->get('config_f_phone');
        $data['f_phonea'] = preg_replace('/[^+0-9]/', '', $data['f_phone']);
        $data['f_tg'] = $this->config->get('config_f_tg');
        $data['f_inst'] = $this->config->get('config_f_inst');

        $data['cookie'] = $this->load->controller('common/cookie');


        $data['w3creators_js'] = html_entity_decode($this->config->get('config_w3creators_custom_js') ? $this->config->get('config_w3creators_custom_js') : '', ENT_QUOTES, 'UTF-8');
      
        return $this->load->view('common/footer', $data);
    }
}