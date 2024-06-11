<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Upload data from form
    public function insertBanner($data)
    {
        $this->db->insert('footer', $data);
        return $this->db->affected_rows() > 0;
    }


    // get data code 
    public function getHomepageData($id = null)
    {
        if ($id !== null) {
            $this->db->where('ID', $id);
        }

        $query = $this->db->get('footer');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }



    // delete function
    public function deleteBanner($id)
    {

        $this->db->where('id', $id);
        return $this->db->delete('footer');
    }


    // edit code 

    public function getBannerById($id) {
        $query = $this->db->get_where('footer', array('id' => $id));
        return $query->row_array();
    }


    public function updateBanner($id, $data)
    {
        $this->db->where('ID', $id);
        return $this->db->update('footer', $data);
    }
}
