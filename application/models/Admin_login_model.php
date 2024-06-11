<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Verify admin credentials
    public function verifyAdmin($Email_id, $password)
    {
        $this->db->where('Email_id', $Email_id);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            return $query->row_array(); // Return admin data if credentials are correct
        } else {
            return false; // Return false if credentials are incorrect
        }
    }

    // Retrieve banner data by ID
    public function getBannerById($id)
    {
        $query = $this->db->get_where('admin', array('id' => $id));
        return $query->row_array();
    }

    // Update banner data
    public function updateBanner($id, $update_data)
    {
        // Check if $id is not null or empty
        if ($id !== null && !empty($id)) {
            // Update the banner data
            $this->db->where('id', $id);
            $success = $this->db->update('admin', $update_data);
    
            // Check if the update operation was successful
            if ($success) {
                return true; // Return true if update was successful
            } else {
                // Log the database error
                $error = $this->db->error();
                log_message('error', 'Database Error: ' . $error['message']);
    
                return false; // Return false if update failed
            }
        } else {
            return false; // Return false if $id is null or empty
        }
    }
    
    
    
}
?>
