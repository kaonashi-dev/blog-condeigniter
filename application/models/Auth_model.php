<?php

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login()
    {
        echo "login desde model";
    }

    public function register($data)
    {
        $this->db->insert('user', $data);
    }

    public function check($col, $value)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($col, $value);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? false : true;
    }
}
