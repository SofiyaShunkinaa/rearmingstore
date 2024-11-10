<?php
class ControllerCommonMenu extends Controller {
    public function index(): string {
        $this->load->language('common/menu');
			
		$this->load->model('catalog/product'); 
		$this->load->model('tool/image');
		$this->load->model( 'extension/menu/megamenu' );
		
		$this->language->load('extension/module/pavmegamenu');

		
		$config_theme = $this->config->get('config_theme');
		
		$params = $this->config->get( 'params' );
	 	
		$this->load->model('setting/setting');
		$params = $this->model_setting_setting->getSetting( 'pavmegamenu_params' );
		$setting["menu_id"] = 1;
		 
		if( isset($params['pavmegamenu_params']) && !empty($params['pavmegamenu_params']) ){
	 		$params = json_decode( $params['pavmegamenu_params'] );
	 	}
		if(isset($setting["menu_id"])){
			$data['store_id'] = $setting["menu_id"];

			$parent = 0;
			
			$data['treemenu'] = $this->model_extension_menu_megamenu->getTree( $parent, true, $setting["menu_id"], $params);
			
			
			$template = 'extension/module/pavmegamenuhead';
			return $this->load->view($template, $data);
		}
    }
}
