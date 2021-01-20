<?php

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'model');
    }

    public function login(){
        // $this->services->loginCheck();
        $this->load->view('template/header_user');
        $this->load->view('user/login');
        $this->load->view('template/footer');
    }
    public function register(){
        // $this->services->loginCheck();
        $this->load->view('template/header_user');
        $this->load->view('user/register');
        $this->load->view('template/footer');
    }
    ///
    public function get_all(){
        $users = $this->model->get_all();
        echo json_encode($users);
    }
}