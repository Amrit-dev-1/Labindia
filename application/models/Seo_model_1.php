<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seo_model_1 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add($data)
    {
        return $this->db->insert('seo_service', $data);
    }

    public function get_all_data()
    {
        return $this->db->get('seo_service')->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('seo_service')->row_array();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('seo_service', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('seo_service');
    }
}
