<?php

class Post_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //
    public function new($post)
    {
        $data = $this->db->insert('post', $post);
        return $data;
    }
    public function get_all(){
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('user', 'user._id = post.user');
        $this->db->select('user.username');
        $query = $this->db->get();
        return $query->result();
    }
    public function delete($id){
        $this->db->where('_id', $id);
        $status = $this->db->delete('post');
        return $status;
    }
}
