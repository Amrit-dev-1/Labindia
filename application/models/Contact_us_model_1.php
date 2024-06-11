<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us_model_1 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add($data)
    {
        return $this->db->insert('contactus_register', $data);
    }

    public function get_all_data()
    {
        return $this->db->get('contactus_register')->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('contactus_register')->row_array();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('contactus_register', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contactus_register');
    }
}
