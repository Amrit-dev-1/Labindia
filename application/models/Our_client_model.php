<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_client_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Upload data from form
    public function insertBanner($data)
    {
        $this->db->insert('our_client   ', $data);
        return $this->db->affected_rows() > 0;
    }


    // get data code 
    public function getHomepageData($id = null)
    {
        if ($id !== null) {
            $this->db->where('id', $id);
        }

        $query = $this->db->get('our_client');

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
        return $this->db->delete('our_client');
    }


    // edit code 

    public function getBannerById($id)
    {
        $query = $this->db->get_where('our_client', array('id' => $id));
        return $query->row_array();
    }

    // In your Our_client_model

    public function updateBanner($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        return $this->db->update('our_client');
    }
}
