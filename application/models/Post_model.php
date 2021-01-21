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
}
