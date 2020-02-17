<?php


namespace App\Models\user;
use App\Models\DB;

class RegUser
{
    private $id;
    private $db;
    private $username;
    private $pass;
    private $email;
    private $id_uloga;
    public $data=[];

    public function __construct(DB $db, $username, $email, $pass, $id_uloga)
    {
        $this->pass=$pass;
        $this->db=$db;
        $this->username=$username;
        $this->email=$email;
        $this->id_uloga=$id_uloga;
    }

    public function regUser(){
      /*  $params = [
            'username' => $this->username,
            'password' => md5($this->pass),
            'email' => $this->email,
            'id_uloga' =>  $this->id_uloga
        ];
*/
        $result = $this->db->conn->prepare("
        INSERT INTO
        user
        VALUES ('', ?, ?, ?, ?)");
       /* $query = "
        INSERT INTO
        user
        VALUES ('', ?, ?, ?, ?)";*/
      /*  $this->db->executeQueryWithParams($query, $params);*/

        $result->bindValue(1, $this->username);
        $result->bindValue(2, md5($this->pass));
        $result->bindValue(3, $this->email);
        $result->bindValue(4, $this->id_uloga);
        $r=$result->execute();
        if($r){
            return $this->data['
                     "uspeh","uspesno upisano"
           ' ];
        } else {
            return $this->data['
                     "neuspeh","neuspeh" '];
        }


    }
}