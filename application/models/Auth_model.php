<?php

class Auth_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function login(){
        echo "login desde model";
    }
    public function register($data){
        $this->db->insert('user', $data);
    }
}