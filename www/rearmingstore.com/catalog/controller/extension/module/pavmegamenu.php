<?php
/**
 * @package Pav Megamenu module for Opencart 3.x
 * @version 1.0
 * @author http://www.pavothemes.com
 * @copyright	Copyright (C) Feb 2012 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
 * @license		GNU General Public License version 2
 */

class ControllerExtensionModulePavmegamenu extends Controller {

	public $data;
	static $MEGAMENU;
	public function index($setting) {
		static $module = 0;
			
		$this->load->model('catalog/product'); 
		$this->load->model('tool/image');
		$this->load->model( 'extension/menu/megamenu' );
		
		$this->language->load('extension/module/pavmegamenu');

		
		$config_theme = $this->config->get('config_theme');
		$this->data['button_cart'] = $this->language->get('button_cart');
		
		$params = $this->config->get( 'params' );
	 	
		$this->load->model('setting/setting');
		$params = $this->model_setting_setting->getSetting( 'pavmegamenu_params' );

		 
		if( isset($params['pavmegamenu_params']) && !empty($params['pavmegamenu_params']) ){
	 		$params = json_decode( $params['pavmegamenu_params'] );
	 	}
		if(isset($setting["menu_id"])){
			$this->data['store_id'] = $setting["menu_id"];

			$parent = '0';
			
			$this->data['treemenu'] = $this->model_extension_menu_megamenu->getTree( $parent, true, $setting["menu_id"], $params);
			
			$template = 'extension/module/pavmegamenu';
			return $this->load->view($template, $this->data);
		}
	}
}
?>