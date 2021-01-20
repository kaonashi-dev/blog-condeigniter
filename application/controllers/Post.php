<?php

class Psot extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model', 'model');
    }

    public function new(){
        $post = array(
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'user' => $_SESSION['id'],
            'created_at' => date("Y-m-d H:i:s")
        );
        $this->model->new($post);
    }
}