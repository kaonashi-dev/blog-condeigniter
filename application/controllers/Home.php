<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->services->session();
		$this->load->view('template/header');
        $this->load->view('home/index');
        $this->load->view('template/footer');
	}
}
