<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services{
    ///
    function __construct()
    {
    }
    public function session(){
        if(!isset($_SESSION['id'])){
            redirect(base_url("/user/login"));
            exit;
        }
    }
    public function loginCheck(){
        if(isset($_SESSION['id'])){
            redirect(base_url("home"));
            exit;
        }
    }
}