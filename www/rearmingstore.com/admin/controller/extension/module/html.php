<?php
class ControllerExtensionModuleHTML extends Controller {
    private array $error = [];

    public function index(): void {
        $this->load->language('extension/module/html');

        $this->document->setTitle($this->language->get('heading_title'));

        // Modules
        $this->load->model('setting/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('html', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        ];

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/html', 'user_token=' . $this->session->data['user_token'], true)
            ];
        } else {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/html', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            ];
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/html', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/html', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['module_description'])) {
            $data['module_description'] = $this->request->post['module_description'];
        } elseif (!empty($module_info)) {
            $data['module_description'] = $module_info['module_description'];
        } else {
            $data['module_description'] = [];
        }
		if (isset($this->request->post['template_id'])) {
            $data['template_id'] = (int)$this->request->post['template_id'];
        } elseif (!empty($module_info)) {
            $data['template_id'] = $module_info['template_id'];
        } else {
            $data['template_id'] = '';
        }
		$data['templates'] = array(
			array(
				'template_id' => 1,
				'name' => 'Default',
			),
			array(
				'template_id' => 2,
				'name' => 'Get Boost Home',
			),
			array(
				'template_id' => 3,
				'name' => 'Get On Top Home',
			),
			array(
				'template_id' => 4,
				'name' => 'Choose goal Home',
			),
			array(
				'template_id' => 5,
				'name' => 'Contacts in contacts page',
			),
			array(
				'template_id' => 6,
				'name' => 'Warranty and Returns in contacts page',
			),
			array(
				'template_id' => 7,
				'name' => 'Purchase Terms in contacts page',
			),
			array(
				'template_id' => 8,
				'name' => 'Payment in contacts page',
			),
			array(
				'template_id' => 9,
				'name' => 'Privacy Policy in policy page',
			),
			array(
				'template_id' => 10,
				'name' => 'Terms in policy page',
			),
		);

        // Languages
        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->request->post['status'])) {
            $data['status'] = (int)$this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = 1;
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/html', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/html')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        return !$this->error;
    }
}