<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navigation_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertBanner($data)
    {
        $this->db->insert('nav_bar', $data);
        return $this->db->affected_rows() > 0;
    }


    // get data code 
    public function getHomepageData($id = null)
    {
        if ($id !== null) {
            $this->db->where('id', $id);
        }

        $query = $this->db->get('nav_bar');

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
        return $this->db->delete('nav_bar');
    }


    // edit code 

    public function getBannerById($id) {
        $query = $this->db->get_where('nav_bar', array('id' => $id));
        return $query->row_array();
    }


    public function updateBanner($id, $data)
    {
        $this->db->where('ID', $id);
        return $this->db->update('nav_bar', $data);
    }
}
