<?php
class ControllerExtensionExtensionPromotion extends Controller {
    public function index() {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, OPENCART_SERVER . 'index.php?route=api/promotion&type=' . substr($this->request->get['route'], strrpos($this->request->get['route'], '/') + 1));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($curl);

        curl_close($curl);

        if ($response) {
            return $response;
        } else {
            return '';
        }
    }

    // admin/controller/extension/extension/promotion/after
    public function getList(string &$route, array &$args, mixed &$output): void {
        if ($this->request->get['route'] == 'extension/extension/promotion') {
            $this->load->language('extension/extension/promotion');

            $data['promotion'] = '';

            $this->response->setOutput($this->load->view('extension/extension/promotion', $data));
        }
    }
}