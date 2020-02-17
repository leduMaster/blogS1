<?php


namespace App\Models\comm;


use App\Models\DB;

class comAdd
{ private $db;
    private $id_posta;
    private $commm;
    private $id_user;
    private $datum;
    public $data=[];
    public function __construct(DB $db,$commm,$id_posta,$id_user,$datum)
    {
        $this->db=$db;
        $this->id_posta=$id_posta;
        $this->id_user=$id_user;
        $this->datum=$datum;
        $this->commm=$commm;
    }
    public function comAdd(){

        try {
        $result = $this->db->conn->prepare("
        INSERT INTO
        komentari
        VALUES ('', ?, ?, ?, ?)");
        $result->bindValue(1, $this->commm);
        $result->bindValue(2, $this->id_posta);
        $result->bindValue(3, $this->id_user);
        $result->bindValue(4, $this->datum);
        $r=$result->execute();
            if($r){
            return  1;
        } else {
                return  0;
        }
    }
    catch(\PDOException $e){
        echo $e->getMessage();
        echo "Problem with adding destination!";
    }

}
}