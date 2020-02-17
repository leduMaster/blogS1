<?php


namespace App\Models\posts;;
use App\Models\DB;


class PostAdd
{
    private $db;
    private $naslov;
    private $teks;
    private $slika;
    private $opis;
    private $id_user;
    public function __construct(DB $db,$naslov,$teks,$slika,$opis,$id_user){
        $this->db = $db;
        $this->naslov = $naslov;
        $this->teks = $teks;
        $this->slika = $slika;
        $this->opis = $opis;
        $this->id_user = $id_user;
    }
    public function add(){
        try {

            $rez = $this->db->conn->prepare("INSERT INTO posts VALUES ('', ?, ?, ?,'',?, ?,?)");
            $rez->bindValue(1, $this->naslov);
            $rez->bindValue(2, $this->teks);
            $rez->bindValue(3, time());
            $rez->bindValue(4, $this->slika);
            $rez->bindValue(5, $this->opis);
            $rez->bindValue(6, $this->id_user);
            $r=$rez->execute();

          if($r){ echo "Post inserted successfully!"; }
          else { echo "Error!"; }
        }
        catch(PDOException $e){
            echo $e->getMessage();
            echo "Problem with adding destination!";
        }}
}