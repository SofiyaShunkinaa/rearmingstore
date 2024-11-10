<?php
class ControllerInformationContact extends Controller {
    private array $error = [];

    public function index(): void {
        $this->load->language('information/contact');

        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if ($this->config->get('config_mail_engine')) {
                $mail_option = [
                    'parameter'     => $this->config->get('config_mail_parameter'),
                    'smtp_hostname' => $this->config->get('config_mail_smtp_hostname'),
                    'smtp_username' => $this->config->get('config_mail_smtp_username'),
                    'smtp_password' => html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8'),
                    'smtp_port'     => $this->config->get('config_mail_smtp_port'),
                    'smtp_timeout'  => $this->config->get('config_mail_smtp_timeout')
                ];

                $mail = new \Mail($this->config->get('config_mail_engine'), $mail_option);
                $mail->setTo($this->config->get('config_email'));
                // Less spam and fix bug when using SMTP like sendgrid.
                $mail->setFrom($this->config->get('config_email'));
                $mail->setReplyTo($this->request->post['email']);
                $mail->setSender(html_entity_decode($this->request->post['name'], ENT_QUOTES, 'UTF-8'));
                $mail->setSubject(html_entity_decode(sprintf($this->language->get('email_subject'), $this->request->post['name']), ENT_QUOTES, 'UTF-8'));
                $mail->setText($this->request->post['enquiry']);
                $mail->send();
            }

            $this->response->redirect($this->url->link('information/contact/success'));
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => 'Home',
            'href' => $this->url->link('common/home')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('information/contact')
        ];

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        if (isset($this->error['email'])) {
            $data['error_email'] = $this->error['email'];
        } else {
            $data['error_email'] = '';
        }

        if (isset($this->error['enquiry'])) {
            $data['error_enquiry'] = $this->error['enquiry'];
        } else {
            $data['error_enquiry'] = '';
        }

        // Image files
        $this->load->model('tool/image');

        if ($this->config->get('config_image')) {
            $data['image'] = $this->model_tool_image->resize($this->config->get('config_image'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_height'));
        } else {
            $data['image'] = false;
        }

        $data['locations'] = [];

        // Locations
        $this->load->model('localisation/location');

        foreach ((array)$this->config->get('config_location') as $location_id) {
            $location_info = $this->model_localisation_location->getLocation((int)$location_id);

            if ($location_info) {
                if ($location_info['image']) {
                    $image = $this->model_tool_image->resize($location_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_height'));
                } else {
                    $image = false;
                }

                $data['locations'][] = [
                    'location_id' => $location_info['location_id'],
                    'name'        => $location_info['name'],
                    'address'     => nl2br($location_info['address']),
                    'geocode'     => $location_info['geocode'],
                    'telephone'   => $location_info['telephone'],
                    'fax'         => $location_info['fax'],
                    'image'       => $image,
                    'open'        => nl2br($location_info['open']),
                    'comment'     => $location_info['comment']
                ];
            }
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } else {
            $data['name'] = $this->customer->getFirstName();
        }

        if (isset($this->request->post['email'])) {
            $data['email'] = $this->request->post['email'];
        } else {
            $data['email'] = $this->customer->getEmail();
        }

        if (isset($this->request->post['enquiry'])) {
            $data['enquiry'] = $this->request->post['enquiry'];
        } else {
            $data['enquiry'] = '';
        }

        // Captcha
        if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('contact', (array)$this->config->get('config_captcha_page'))) {
            $data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'), $this->error);
        } else {
            $data['captcha'] = '';
        }

        $data['store'] = $this->config->get('config_name');
        $data['address'] = nl2br($this->config->get('config_address'));
        $data['geocode'] = $this->config->get('config_geocode');
        $data['geocode_hl'] = $this->config->get('config_language');
        $data['telephone'] = $this->config->get('config_telephone');
        $data['fax'] = $this->config->get('config_fax');
        $data['open'] = nl2br($this->config->get('config_open'));
        $data['comment'] = $this->config->get('config_comment');
        $data['button_submit'] = $this->language->get('button_submit');
        $data['action'] = $this->url->link('information/contact', '', true);

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/contact', $data));
    }

    protected function validate() {
        $keys = [
            'name',
            'email',
            'enquiry'
        ];

        foreach ($keys as $key) {
            if (!isset($this->request->post[$key])) {
                $this->request->post[$key] = '';
            }
        }

        if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 32)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error['email'] = $this->language->get('error_email');
        }

        if ((oc_strlen($this->request->post['enquiry']) < 10) || (oc_strlen($this->request->post['enquiry']) > 3000)) {
            $this->error['enquiry'] = $this->language->get('error_enquiry');
        }

        // Captcha
        if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('contact', (array)$this->config->get('config_captcha_page'))) {
            $captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

            if ($captcha) {
                $this->error['captcha'] = $captcha;
            }
        }

        return !$this->error;
    }

    public function success(): void {
        $this->load->language('information/contact');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => 'Home',
            'href' => $this->url->link('common/home')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('information/contact')
        ];

        $data['text_message'] = $this->language->get('text_message');

        $data['continue'] = $this->url->link('common/home');

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('common/success', $data));
    }
	
	public function request() {
        $json = [];

        // Валидация формы
        if (empty($this->request->post['selectGame'])) {
            $json['errors']['selectGame'] = 'Select game is required';
        }

        if (empty($this->request->post['rqemail']) || !filter_var($this->request->post['rqemail'], FILTER_VALIDATE_EMAIL)) {
            $json['errors']['rqemail'] = 'Valid email is required';
        }

        if (empty($this->request->post['request'])) {
            $json['errors']['request'] = 'Your request is required';
        }

        // Если есть ошибки, возвращаем их
        if ($json) {
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
            return;
        }

        // Если нет ошибок, отправляем письмо
        $mail_option = [
			'parameter'     => $this->config->get('config_mail_parameter'),
			'smtp_hostname' => $this->config->get('config_mail_smtp_hostname'),
			'smtp_username' => $this->config->get('config_mail_smtp_username'),
			'smtp_password' => html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8'),
			'smtp_port'     => $this->config->get('config_mail_smtp_port'),
			'smtp_timeout'  => $this->config->get('config_mail_smtp_timeout')
		];

		$mail = new \Mail($this->config->get('config_mail_engine'), $mail_option);
		

        $mail->setTo($this->config->get('config_email'));
        $mail->setFrom($this->config->get('config_mail_smtp_username'));
        $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
        $mail->setSubject('Service Request');
		
		$data['request'] = $this->request->post['request'];
		$data['game'] = $this->request->post['selectGame'];
		$data['email'] = $this->request->post['rqemail'];
		$data['method'] = $this->request->post['contactMethod'];
		
		$mail->setHtml($this->load->view('mail/request', $data));
        $mail->send();

        // Возвращаем успешный ответ
        $json['success'] = 'Thank you! Your request has been sent.';
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}