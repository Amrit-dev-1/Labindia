<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model_2 extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Upload data from form
    public function insertBanner($data)
    {
        $this->db->insert('homepage_2   ', $data);
        return $this->db->affected_rows() > 0;
    }


    // get data code 
    public function getHomepageData($id = null)
    {
        if ($id !== null) {
            $this->db->where('ID', $id);
        }

        $query = $this->db->get('homepage_2');

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
        return $this->db->delete('homepage_2');
    }


    // edit code 

    public function getBannerById($id) {
        $query = $this->db->get_where('homepage_2', array('id' => $id));
        return $query->row_array();
    }


    public function updateBanner($id, $data)
    {
        $this->db->where('ID', $id);
        return $this->db->update('homepage_2', $data);
    }
}
