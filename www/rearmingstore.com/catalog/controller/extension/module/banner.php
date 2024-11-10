<?php
class ControllerExtensionModuleBanner extends Controller {
    public function index(array $setting): string {
        static $module = 0;

        // Image files
        $this->load->model('tool/image');

        // Banners
        $this->load->model('design/banner');

        $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
        $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');

        $this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.min.js');

        $data['banners'] = [];

        $results = $this->model_design_banner->getBanner($setting['banner_id']);

        foreach ($results as $result) {
            if (is_file(DIR_IMAGE . $result['image'])) {
                $data['banners'][] = [
                    'title' => $result['title'],
                    'link'  => $result['link'],
                    'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
                ];
            }
        }
        $data['module'] = $module++;
		
		if(isset($setting['template_id'])){
			return $this->load->view('extension/module/banner'.$setting['template_id'], $data);
		}else{
			return $this->load->view('extension/module/banner', $data);
		}

        
    }
}