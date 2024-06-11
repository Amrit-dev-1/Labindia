<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model_1 extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllData()
    {
        $data = array();

        $query1 = $this->db->get('homepage_1');
        $data['homepage_1'] = $query1->result();

        $query2 = $this->db->get('homepage_2');
        $data['homepage_2'] = $query2->result();

        $query3 = $this->db->get('homepage_3');
        $data['homepage_3'] = $query3->result();

        return $data;
    }

    // Insert data from form
    public function insertBanner($data)
    {
        $this->db->insert('homepage_1', $data);
        return $this->db->affected_rows() > 0;
    }

    // Retrieve data
    public function getHomepageData($id = null)
    {
        if ($id !== null) {
            $this->db->where('ID', $id);
            $query = $this->db->get('homepage_1');
            return $query->row_array();
        } else {
            $query = $this->db->get('homepage_1');
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
        $this->db->delete('homepage_1');

        return $this->db->affected_rows() > 0;
    }

    // Retrieve single banner by ID
    public function getBannerById($id)
    {
        $query = $this->db->get_where('homepage_1', array('ID' => $id));
        return $query->row_array();
    }

    // Update banner data
    public function updateBanner($id, $data)
    {
        $this->db->where('ID', $id);
        return $this->db->update('homepage_1', $data);
    }
}
?>
