<?php
class ControllerExtensionModuleTestimonial extends Controller {
    public function index() {
        $this->load->model('extension/module/testimonial');
		$this->load->model('tool/image');
        $data['testimonials'] = array();

        $results = $this->model_extension_module_testimonial->getTestimonials();

        foreach ($results as $result) {
			if($result['photo'] == ''){
				$thumb = $this->model_tool_image->resize('no_image.png', 100, 100); 
			}else{
				$thumb = $this->model_tool_image->resize($result['photo'], 100, 100);
			}
            $data['testimonials'][] = array(
                'testimonial_id' => $result['testimonial_id'],
                'name' => $result['name'],
                'photo' => $thumb,
                'text' => $result['text']
                // Добавьте другие данные, которые вы хотите вывести
            );
        }
        return $this->load->view('extension/module/testimonial', $data);
    }
}