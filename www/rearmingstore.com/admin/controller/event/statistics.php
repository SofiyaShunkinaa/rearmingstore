<?php
class ControllerEventStatistics extends Controller {
    // admin/model/catalog/review/addReview/after
    public function addReview(string &$route, array &$args, mixed &$output): void {
        // Statistics
        $this->load->model('report/statistics');

        $this->model_report_statistics->addValue('review', 1);
    }

    // admin/model/catalog/review/deleteReview/after
    public function deleteReview(string &$route, array &$args, mixed &$output): void {
        // Statistics
        $this->load->model('report/statistics');

        $this->model_report_statistics->removeValue('review', 1);
    }

    // admin/model/sale/returns/addReturn/after
    public function addReturn(string &$route, array &$args, mixed &$output): void {
        // Statistics
        $this->load->model('report/statistics');

        $this->model_report_statistics->addValue('returns', 1);
    }

    // admin/model/sale/returns/deleteReturn/after
    public function deleteReturn(string &$route, array &$args, mixed &$output): void {
        // Statistics
        $this->load->model('report/statistics');

        $this->model_report_statistics->removeValue('returns', 1);
    }
}