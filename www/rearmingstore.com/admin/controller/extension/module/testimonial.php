<?php
class ControllerExtensionModuleTestimonial extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/testimonial');
		$this->load->model('extension/module/testimonial');
        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/module/testimonial');
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->load->model('setting/setting');
			$status = $this->request->post['module_testimonial_status'];
			$this->model_setting_setting->editSetting('module_testimonial', array('module_testimonial_status' => $status));
			
            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module/testimonial', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }
		if (isset($this->request->post['module_testimonial_status'])) {
            $data['module_testimonial_status'] = $this->request->post['module_testimonial_status'];
        } else {
            $data['module_testimonial_status'] = $this->config->get('module_testimonial_status');
        }

        $this->getList();
    }

    public function add() {
        $this->load->language('extension/module/testimonial');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/module/testimonial');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_testimonial->addTestimonial($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module/testimonial', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function edit() {
        $this->load->language('extension/module/testimonial');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/module/testimonial');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_testimonial->editTestimonial($this->request->get['testimonial_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module/testimonial', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete() {
        $this->load->language('extension/module/testimonial');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/module/testimonial');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $testimonial_id) {
                $this->model_extension_module_testimonial->deleteTestimonial($testimonial_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module/testimonial', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getList();
    }

    protected function getList() {
		$this->load->language('extension/module/testimonial');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/module/testimonial');

		$data['testimonials'] = array();
		

		$results = $this->model_extension_module_testimonial->getTestimonials();

		foreach ($results as $result) {
			$data['testimonials'][] = array(
				'testimonial_id' => $result['testimonial_id'],
				'name'           => $result['name'],
				'edit'           => $this->url->link('extension/module/testimonial/edit', 'user_token=' . $this->session->data['user_token'] . '&testimonial_id=' . $result['testimonial_id'], true),
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_add'] = $this->language->get('text_add');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_name'] = $this->language->get('text_name');
		$data['text_action'] = $this->language->get('text_action');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_save'] = $this->language->get('button_save');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['action'] = $this->url->link('extension/module/testimonial', 'user_token=' . $this->session->data['user_token'], true);
		$data['module_testimonial_status'] = $this->config->get('module_testimonial_status');
		
		$data['column_name'] = $this->language->get('column_name');
		$data['column_action'] = $this->language->get('column_action');

		$data['entry_name'] = $this->language->get('entry_name');

		$data['token'] = $this->session->data['user_token'];

		$data['add'] = $this->url->link('extension/module/testimonial/add', 'user_token=' . $this->session->data['user_token'], true);
		$data['delete'] = $this->url->link('extension/module/testimonial/delete', 'user_token=' . $this->session->data['user_token'], true);
		$data['column_name'] = $this->language->get('column_name');
        $data['column_action'] = $this->language->get('column_action');
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/testimonial_list', $data));
	}

    protected function getForm() {
        $this->load->model('tool/image');
        $data['text_form'] = !isset($this->request->get['testimonial_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_text'] = $this->language->get('entry_text');
        $data['entry_photo'] = $this->language->get('entry_photo');
		
        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        // Breadcrumbs
        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
            'separator' => false
        );

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_extension'),
            'href'      => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true),
            'separator' => ' :: '
        );

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'),
            'href'      => $this->url->link('extension/module/testimonial', 'user_token=' . $this->session->data['user_token'], true),
            'separator' => ' :: '
        );

        if (!isset($this->request->get['testimonial_id'])) {
            $data['action'] = $this->url->link('extension/module/testimonial/add', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/testimonial/edit', 'user_token=' . $this->session->data['user_token'] . '&testimonial_id=' . $this->request->get['testimonial_id'], true);
        }

        $data['cancel'] = $this->url->link('extension/module/testimonial', 'user_token=' . $this->session->data['user_token'], true);

        if (isset($this->request->get['testimonial_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $testimonial_info = $this->model_extension_module_testimonial->getTestimonial($this->request->get['testimonial_id']);
        }

        if (isset($this->request->post['photo'])) {
			$data['photo'] = $this->request->post['photo'];
		} elseif (!empty($testimonial_info)) {
			$data['photo'] = $testimonial_info['photo'];
		} else {
			$data['photo'] = '';
		}
        if (isset($this->request->post['text'])) {
			$data['text'] = $this->request->post['text'];
		} elseif (!empty($testimonial_info)) {
			$data['text'] = $testimonial_info['text'];
		} else {
			$data['text'] = '';
		}
        if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($testimonial_info)) {
			$data['name'] = $testimonial_info['name'];
		} else {
			$data['name'] = '';
		}
		if($data['photo'] == ''){
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100); 
		}else{
			$data['thumb'] = $this->model_tool_image->resize($data['photo'], 100, 100);
		}
		$data['images'] = $this->getImages();
		$data['filemanager'] = $this->session->data['user_token'];
		$data['button_image'] = $this->language->get('button_image'); // Добавьте соответствующий языковый ключ в ваш языковый файл
        
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('extension/module/testimonial_form', $data));
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'extension/module/testimonial')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        // Добавьте дополнительные правила валидации по необходимости

        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }

    protected function validateDelete() {
        // Остальной код для валидации удаления отзыва
    }
	protected function getImages() {
		$banners = array();

        $this->load->model('design/banner');

        $results = $this->model_design_banner->getBanners(); // Метод модели для получения баннеров

        foreach ($results as $result) {
            $banners[] = array(
                'banner_id' => $result['banner_id'],
                'name'      => $result['name'],
            );
        }

        return $banners;
    }
	protected function getFilemanagerUrl() {
        return $this->url->link('common/filemanager', 'user_token=' . $this->session->data['user_token'] . '&target=image');
    }
}