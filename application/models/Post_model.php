<?php

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //
    public function new($post)
    {
        $this->db->insert('post', $post);
    }
}
