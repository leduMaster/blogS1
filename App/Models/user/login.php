<?php

namespace App\Models\user;
use App\Models\DB;

class login
{
    private $username;
    private $pass;
    private $db;
    public function __construct(DB $db,$username,$pass) {
        $this->username = $username;
        $this->pass=md5($pass);
        $this->db = $db;
        }
    public function find() {
        try{
            $upit = "SELECT *, u.id_user 
             FROM user u 
             INNER JOIN uloga r
              ON u.id_uloga= r.id_uloga 
              WHERE 
              username = ? 
              AND 
              password = ?";
            $s = $this->db->conn->prepare($upit);
            $s->bindValue(1, $this->username);
            $s->bindValue(2, $this->pass);

            $s->execute();
            $user = $s->fetch();
            if($user) {
                $_SESSION['user'] = $user;
            }
            else {
                $_SESSION['error'] = "Wrong email or password.";
                return 0;
            }
            return $user;
        }

        catch(\PDOException $ex){
            echo json_encode(['message'=> 'Problem with database ' . $ex->getMessage()]);
           http_response_code(500);

        }






















    }
}