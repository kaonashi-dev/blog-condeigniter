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
        $dataUser = array(
            'email' => $this->input->post('email'),
            'pass' => $this->input->post('pass')
        );
        if($this->model->login($dataUser) > 0){
            echo json_encode([
                'status' => 'success',
                'msg' => "Todo bien todo"
            ]);
        }else{
            echo json_encode([
                'status' => 'error',
                'msg' => "Username y/o password incorrecto"
            ]);
        }
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
                echo json_encode([
                    'status' => 'success',
                    'msg' => "Usuario registrado"
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'msg' => "El username: " . $this->input->post('username') . " ya existe"
                ]);
            }
        } else {
            echo json_encode([
                'status' => 'error',
                'msg' => "El correo: " . $this->input->post('email') . " ya existe..."
            ]);
        }
    }
}
