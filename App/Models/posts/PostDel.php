<?php


namespace App\Models\posts;
use App\Models\DB;


class PostDel
{
    private $db;
    private $id;
    public function __construct(DB $db,$id){
        $this->db = $db;
        $this->id = $id;
    }

    public function del(){
        if($this->id){
            $rez = $this->db->conn->prepare("
        DELETE
        FROM
        posts
        WHERE id_post = ?");
            $rez->bindValue(1, $this->id);
            try
            {
                $rez->execute();
                return 1;
                /*http_response_code(204);*/
            }
            catch (\PDOException $ex)
            {
                echo json_encode(['message'=> 'Problem sa bazom ' . $ex->getMessage()]);
                return 0;/*http_response_code(500);*/

            }
        }
        else {
            return 0;/*http_response_code(400);*/
            }
    }
}