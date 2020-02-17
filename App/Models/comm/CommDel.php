<?php


namespace App\Models\comm;


use App\Models\DB;

class CommDel
{
    private $db;
    private $id;
    public function __construct(DB $db, $id)
    {
        $this->db=$db;
        $this->id=$id;
    }
    public function del(){
        if($this->id){
        $rez = $this->db->conn->prepare("
        DELETE
        FROM
        komentari
        WHERE id_comm = ?");
        $rez->bindValue(1, $this->id);
        try
        {
            $rez->execute();
            return 1;/*
            http_response_code(204);*/
        }
        catch (\PDOException $ex)
        {
            echo $ex->getMessage();
            echo json_encode(['message'=> 'problem sa bazom ' . $ex->getMessage()]);
            return 0;/*
            http_response_code(500);*/
        }
        }
        else {return 0;/*
            http_response_code(400);*/
        }
    }
}
