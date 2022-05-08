<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model('post');
    }

    public function index()
    {
        $posts = $this->postModel->getPosts();
        $data = [
            'title' => 'Welcome to the home page',
            'posts' => $posts
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'This is about page'
        ];
        
        $this->view('pages/about', $data);
    }
}