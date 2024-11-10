<?php
class ControllerAccountForgotten extends Controller {
    private array $error = [];

    public function index(): void {
        if ($this->customer->isLogged()) {
            $this->response->redirect($this->url->link('account/account', 'customer_token=' . $this->session->data['customer_token'], true));
        }

        $this->load->language('account/forgotten');

        $this->document->setTitle($this->language->get('heading_title'));

        // Customers
        $this->load->model('account/customer');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_account_customer->editCode($this->request->post['email'], oc_token(40));

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => 'Home',
            'href' => $this->url->link('common/home')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_account'),
            'href' => $this->url->link('account/account', '', true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_forgotten'),
            'href' => $this->url->link('account/forgotten', '', true)
        ];

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['action'] = $this->url->link('account/forgotten', '', true);
        $data['back'] = $this->url->link('account/login', '', true);

        if (isset($this->request->post['email'])) {
            $data['email'] = $this->request->post['email'];
        } else {
            $data['email'] = '';
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('account/forgotten', $data));
    }

    protected function validate() {
        $keys = [
            'password'
        ];

        foreach ($keys as $key) {
            if (!isset($this->request->post[$key])) {
                $this->request->post[$key] = '';
            }
        }

        if (!isset($this->request->post['email'])) {
            $this->error['warning'] = $this->language->get('error_email');
        } elseif (!$this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
            $this->error['warning'] = $this->language->get('error_email');
        }

        // Check if customer has been approved.
        $customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

        if ($customer_info && !$customer_info['status']) {
            $this->error['warning'] = $this->language->get('error_approved');
        }

        return !$this->error;
    }
	public function ajaxForgotten() {
		$json = array();
		$this->load->language('account/forgotten');
		$this->load->model('account/customer');

		if ($this->customer->isLogged()) {
			$json['redirect'] = $this->url->link('account/account', '', true);
		}

		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {
			$this->model_account_customer->editCode($this->request->post['email'], oc_token(40));
			$json['success'] = 'A password reset confirmation has been sent to your email address.';
		} else {
			$json['error'] = $this->error;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}