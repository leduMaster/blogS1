<?php

namespace App\Controllers;
use App\Models\posts\Post;

class PageController extends Controller {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function home(){
        $postModel = new Post($this->db);
        $posts = $postModel->getAll();
        $this->view("home", [
            "title" => "Home page",
            "posts" => $posts
        ]);
    }
    public function register() {
        $this->view("register");
    }
    public function login() {
        $this->view("login");
    }
    public function about() {
        $this->view("about");
    }
    public function status404() {
      $this->view("404");
}
  /*  public function post(){
        $postModel = new Post($this->db);
        $posts = $postModel->getAll();
        echo \json_encode($posts);
    }
  */
}