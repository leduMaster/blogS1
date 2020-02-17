<?php


namespace App\Models\posts;


use App\Models\DB;

class editDo
{
    private $db;
    private $naslov;
    private $teks;
    private $slika;
    private $slicka;
    private $opis;
    private $id;
    private $putttt;
    private $slika_tmp;
    private $errors=[];
    public function __construct(DB $db,$id,$naslov,$teks,$opis,$slika,$slicka,$slika_tmp){
        $this->db = $db;
        $this->naslov = $naslov;
        $this->teks = $teks;
        $this->slika = $slika;
        $this->opis = $opis;
        $this->slicka = $slicka;
        $this->id= $id;
        $this->slika_tmp= $slika_tmp;
    }

    public  function edit(){
        if($this->id){
        if(!empty($this->slika))
        {
            $putpr='img/'.time().$this->slika;
            $this->putttt = 'App/assets/'.$putpr;
            if(!move_uploaded_file($this->slika_tmp, ''.$this->putttt)) {
                array_push($this->errors, "Slika nije uploadoavana");
            }
            if(count($this->errors) > 0) {
               echo $this->errors;
            }
            $result= $this->db->conn->prepare("UPDATE posts SET naslov = ?, teks=?, izmenjen=?, slika=?, opis=? WHERE id_post = ?");
            $result->bindValue(1, $this->naslov);
            $result->bindValue(2, $this->teks);
            $result->bindValue(3, time());
            $result->bindValue(4, $putpr);
            $result->bindValue(5, $this->opis);
            $result->bindValue(6, $this->id);
        }
        else{

            $result= $this->db->conn->prepare("UPDATE posts SET naslov = ?, teks=?, izmenjen=?, slika=?, opis=? WHERE id_post = ?");
            $result->bindValue(1, $this->naslov);
            $result->bindValue(2, $this->teks);
            $result->bindValue(3, time());
            $result->bindValue(4, $this->slicka);
            $result->bindValue(5, $this->opis);
            $result->bindValue(6, $this->id);
        }
        try {
            $result->execute();;
            return 1; /*http_response_code(204)*/;
        }
        catch(\PDOException $ex){
            echo $ex->getMessage();
            /*http_response_code(500);*/return 0;
        }
        }
        else {
            /*http_response_code(304);*/return 0;}
    }
}