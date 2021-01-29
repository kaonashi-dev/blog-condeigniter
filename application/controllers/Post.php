<?php

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model', 'model');
    }

    public function create()
    {
        $post = array(
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'user' => $_SESSION['id'],
            'created_at' => date("Y-m-d H:i:s")
        );
        $res = $this->model->new($post);
        if ($res) {
            $status = true;
            $message = 'Publicaciòn creada';
        } else {
            $status = false;
            $message = 'Ocurrio un error intenta nuevamente';
        }
        ///
        echo json_encode([
            'status' => $status,
            'msg' => $message
        ]);
    }
    ///
    public function get_all()
    {
        $data = array();
        $posts = $this->model->get_all();
        foreach ($posts as $post) {
            $data[] = array(
                'id' => $post->_id,
                'title' => $post->title,
                'content' => $post->content,
                'userId' => $post->userId,
                'user' => $post->username,
                'date' => $post->created_at,
            );
        }
        echo json_encode($data);
    }
    ///
    public function delete()
    {
        $post = $_POST["post"];
        $response = $this->model->delete($post);
        echo json_encode([
            'status' => $response
        ]);
    }
    ///
    // views
    public function edit($postId)
    {
        $post = $this->model->get($postId);
        $data = array(
            'id' => $postId,
            'title' => $post->title,
            'content' => $post->content,
            'created_at' => $post->created_at
        );
        //    
        $this->load->view('template/header_user');
        $this->load->view('post/edit', $data);
        $this->load->view('template/footer');
    }
}
