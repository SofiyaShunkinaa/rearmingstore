<?php
class ControllerExtensionModuleHTML extends Controller {
    public function index(array $setting): string {
        if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
            $data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');

            $data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');

			if(isset($setting['template_id'])){
				return $this->load->view('extension/module/html'.$setting['template_id'], $data);
			}else{
				return $this->load->view('extension/module/html', $data);
			}
        } else {
            return '';
        }
    }
}