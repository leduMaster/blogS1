<?php


namespace App\Models\posts;
use App\Models\DB;

  class Post
{
    private $db;
    public function __construct(DB $db){
        $this->db = $db;
    }
    public function getAll(){
        return $this->db->executeQuery("SELECT * FROM posts");
    }
}