<?php
class ControllerAccountPassword extends Controller {
    private array $error = [];

    public function index(): void {
		$this->document->addClass('topNavPage');
        if (!$this->customer->isLogged() || (!isset($this->request->get['customer_token']) || !isset($this->session->data['customer_token']) || ($this->request->get['customer_token'] != $this->session->data['customer_token']))) {
            $this->session->data['redirect'] = $this->url->link('account/password', '', true);

            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->language('account/password');

        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            // Customers
            $this->load->model('account/customer');

            $this->model_account_customer->editPassword($this->customer->getEmail(), $this->request->post['password']);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('account/account', 'customer_token=' . $this->session->data['customer_token'], true));
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
            //'href' => $this->url->link('account/password', 'customer_token=' . $this->session->data['customer_token'], true)
        ];

        if (isset($this->error['password'])) {
            $data['error_password'] = $this->error['password'];
        } else {
            $data['error_password'] = '';
        }

        if (isset($this->error['confirm'])) {
            $data['error_confirm'] = $this->error['confirm'];
        } else {
            $data['error_confirm'] = '';
        }

        if (isset($this->request->post['password'])) {
            $data['password'] = $this->request->post['password'];
        } else {
            $data['password'] = '';
        }

        if (isset($this->request->post['confirm'])) {
            $data['confirm'] = $this->request->post['confirm'];
        } else {
            $data['confirm'] = '';
        }
		if (isset($this->error['old_password'])) {
			$data['error_old_password'] = 'Old password is incorrect.';
		}else{
			if (isset($this->error['error_password'])) {
				$data['error_password'] = 'New password should be different from the current one.';
			}
		}
		

        $data['action'] = $this->url->link('account/password', 'customer_token=' . $this->session->data['customer_token'], true);
        $data['back'] = $this->url->link('account/account', 'customer_token=' . $this->session->data['customer_token'], true);

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('account/password', $data));
    }

    protected function validate() {
        $keys = [
            'old_password',
            'password',
            'confirm'
        ];
		$this->load->model('account/customer');
        foreach ($keys as $key) {
            if (!isset($this->request->post[$key])) {
                $this->request->post[$key] = '';
            }
        }
		$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());


		// Предотвращение изменения на тот же пароль
		if (!$this->model_account_customer->checkPassword($this->customer->getId(), $this->request->post['old_password'])) {
			$this->error['old_password'] = 'Old password is incorrect.';
		}

		if (empty($this->request->post['old_password'])) {
			$this->error['old_password'] = 'Old password is incorrect.';
		}

		// Проверки нового пароля
		if ((mb_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) < 4) || (mb_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) > 40)) {
			$this->error['password'] = $this->language->get('error_password');
		}
		if (password_verify($this->request->post['password'], $customer_info['password'])) {
			$this->error['password'] = 'New password should be different from the current one.';
		}

		if ($this->request->post['confirm'] != $this->request->post['password']) {
			$this->error['confirm'] = $this->language->get('error_confirm');
		}
        return !$this->error;
    }
}