<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    // Insert data from form
    public function insertBanner($data)
    {
        $this->db->insert('admin', $data);
        return $this->db->affected_rows() > 0;
    }

    // Retrieve data
    public function getHomepageData($id = null)
    {
        if ($id !== null) {
            $this->db->where('ID', $id);
            $query = $this->db->get('admin');
            return $query->row_array();
        } else {
            $query = $this->db->get('admin');
            return $query->result_array();
        }
    }

    // Delete data
    public function deleteBanner($id)
    {
        if ($id === null) {
            return false;
        }

        $this->db->where('ID', $id);
        $this->db->delete('admin');

        return $this->db->affected_rows() > 0;
    }

    // Retrieve single banner by ID
    public function getBannerById($id)
    {
        $query = $this->db->get_where('admin', array('ID' => $id));
        return $query->row_array();
    }

    // Update banner data
    public function updateBanner($id, $data)
    {
        $this->db->where('id', $id);
        $result = $this->db->update('admin', $data);
        if (!$result) {
            echo $this->db->error()['message'];
        }
        return $result;
    }


    public function getAllAdminData()
    {
        return $this->db->get('admin')->result_array();
    }
    

}
