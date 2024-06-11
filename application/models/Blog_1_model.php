<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_1_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function get_blog_item($id)
    {
        $query = $this->db->get_where('blog_1', array('id' => $id));
        return $query->row(); 
    }

    public function get_suggested_blogs($current_id)
    {
        $this->db->where('id !=', $current_id);
        return $this->db->get('blog_1')->result();
    }

    public function add($data)
    {
        // return $this->db->insert('blog_1', $data);

        $this->db->insert('blog_1', $data);
        return $this->db->affected_rows() > 0;
    }

    public function get_all_data()
    {
        return $this->db->get('blog_1')->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('blog_1')->row_array();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('blog_1', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('blog_1');
    }
}
