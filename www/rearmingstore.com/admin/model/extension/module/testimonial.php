<?php
class ModelExtensionModuleTestimonial extends Model {
    public function addTestimonial($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "testimonial SET name = '" . $this->db->escape($data['name']) . "', text = '" . $this->db->escape($data['text']) . "', photo = '" . $this->db->escape($data['photo']) . "', date_added = NOW()");

        return $this->db->getLastId();
    }

    public function editTestimonial($testimonial_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "testimonial SET name = '" . $this->db->escape($data['name']) . "', text = '" . $this->db->escape($data['text']) . "', photo = '" . $this->db->escape($data['photo']) . "' WHERE testimonial_id = '" . (int)$testimonial_id . "'");
	}

    public function deleteTestimonial($testimonial_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "testimonial WHERE testimonial_id = '" . (int)$testimonial_id . "'");
    }

    public function getTestimonials() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonial ORDER BY date_added DESC");

        return $query->rows;
    }
	public function getTestimonial($testimonial_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonial WHERE testimonial_id = '" . (int)$testimonial_id . "'");

        return $query->row;
    }
	public function getImages() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "image");

        return $query->rows;
    }
	public function editSetting($code, $data, $store_id = 0) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $store_id => $store_data) {
                    $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($store_data)) . "', serialized = '1'");
                }
            } else {
                $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
            }
        }

        $this->cache->delete('setting');
    }
}