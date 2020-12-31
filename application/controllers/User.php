<?php

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function login(){
        $this->load->view('template/header_user');
        $this->load->view('user/login');
        $this->load->view('template/footer');
    }
    public function register(){
        $this->load->view('template/header_user');
        $this->load->view('user/register');
        $this->load->view('template/footer');
    }
}