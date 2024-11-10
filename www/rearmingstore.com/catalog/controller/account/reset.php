<?php
class ControllerAccountReset extends Controller {
    private array $error = [];

    public function index(): object|null {
        if ($this->customer->isLogged()) {
            $this->response->redirect($this->url->link('account/account', '', true));
        }

        if (isset($this->request->get['code'])) {
            $code = $this->request->get['code'];
        } else {
            $code = '';
        }

        // Customers
        $this->load->model('account/customer');

        $customer_info = $this->model_account_customer->getCustomerByCode($code);

        if ($customer_info) {
            $this->load->language('account/reset');

            $this->document->setTitle($this->language->get('heading_title'));

            if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
                $this->model_account_customer->editPassword($customer_info['email'], $this->request->post['password']);

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
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('account/reset', '', true)
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

            $data['action'] = $this->url->link('account/reset', 'code=' . $code, true);
            $data['back'] = $this->url->link('account/login', '', true);

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('account/reset', $data));
        } else {
            $this->load->language('account/reset');

            $this->session->data['error'] = $this->language->get('error_code');

            return new \Action('account/login');
        }

        return null;
    }

    protected function validate() {
        if ((oc_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) < 4) || (oc_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) > 255)) {
            $this->error['password'] = $this->language->get('error_password');
        }

        if ($this->request->post['confirm'] != $this->request->post['password']) {
            $this->error['confirm'] = $this->language->get('error_confirm');
        }

        return !$this->error;
    }
}