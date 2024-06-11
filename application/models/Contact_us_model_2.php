<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us_model_2 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add($data)
    {
        return $this->db->insert('contactus_detail', $data);
    }

    public function get_all_data()
    {
        return $this->db->get('contactus_detail')->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('contactus_detail')->row_array();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('contactus_detail', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contactus_detail');
    }
}
