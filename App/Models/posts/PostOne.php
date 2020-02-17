<?php


namespace App\Models\posts;
use App\Models\DB;

class PostOne
{
    private $db;
    private $id;
    public function __construct(DB $db, $id)
    {
        $this->db= $db;
        $this->id = $id;
    }
    public function getOne(){

        $rez = $this->db->conn->prepare("
        SELECT * 
        FROM posts 
        WHERE id_post = ?");
        $rez->bindValue(1, $this->id);

        try {
            $rez->execute();
            return  $post = $rez->fetchAll();

        }
        catch(\PDOException $ex){
            echo json_encode(['Message', 'Problem with database: ' . $ex->getMessage()]);
            http_response_code(500);
        }

    }
}