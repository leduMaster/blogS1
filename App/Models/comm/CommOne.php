<?php


namespace App\Models\comm;
use App\Models\DB;

class CommOne
{
    private $db;
    private $id;
    public function __construct(DB $db, $id)
    {
        $this->db=$db;
        $this->id=$id;
    }

    public function getAll(){
        $rez = $this->db->conn->prepare("
        SELECT * 
        FROM komentari k 
        INNER JOIN user u 
        ON k.id_user=u.id_user
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