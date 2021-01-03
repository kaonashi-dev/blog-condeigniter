<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'model');
    }

    public function login()
    {
        $this->model->login();
        echo "login desde controller";
    }

    public function register()
    {
        $userData = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'pass' => $this->input->post('pass'),
            'created_at' => date("Y-m-d H:i:s")
        );
        if ($this->model->check('email', $this->input->post('email'))) {
            if ($this->model->check('username', $this->input->post('username'))) {
                $this->model->register($userData);
                echo "registrado :)";
            } else {
                echo "El username: " . $this->input->post('username') . " ya existe";
            }
        } else {
            echo "El correo: " . $this->input->post('email') . " ya existe...";
        }
    }
}
