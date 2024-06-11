<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_3_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add($data)
    {
        return $this->db->insert('service-3', $data);
    }

    public function get_all_data()
    {
        return $this->db->get('service-3')->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('service-3')->row_array();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('service-3', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('service-3');
    }
}
