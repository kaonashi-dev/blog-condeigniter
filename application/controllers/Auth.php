<?php

class Auth extends CI_Controller {

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
		echo "login";
	}
}
