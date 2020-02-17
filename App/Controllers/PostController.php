<?php


namespace App\Controllers;
use App\Models\posts\Post;
use App\Models\posts\PostAdd;
use App\Models\posts\PostDel;
use App\Models\posts\editDo;
use App\Models\posts\PostOne;
use App\Models\comm\CommOne;
use App\Models\DB;

class PostController extends Controller
{
    private $db;
    private $id;
    public $errors=[];
    public $putttt = '';
    public function  __construct(DB $db)
    {
        $this->db=$db;
    }
    public function edit(){
        if(isset($_GET['id']))
        {
            $this->id=$_GET['id'];
            $post = new PostOne($this->db,$this->id);
            $data = $post->getOne();
            $this->view('adminEdit',[
            "posts" =>$data
            ]);
        }
    }
    public function editDo(){

        if(isset($_POST['postEdit'])){
        $this->id = $_POST['id'];
        $naslov = trim($_POST['naslov']);
        $teks= trim($_POST['tekst']);
        $opis= trim($_POST['opis']);
        $slika= $_FILES['slika']['name'];
        $slicka=$_POST['slicka'];
        $slika_tmp=$_FILES['slika']['tmp_name'];

        $editt = new editDo($this->db, $this->id,$naslov,$teks,$opis,$slika,$slicka,$slika_tmp);
            ;
        if($editt->edit()){
        $_SESSION['uspeh']="Uspesno dodat post";
        $this->admin();
        }
        }
        else {
            http_response_code(400);
        }
    }
    public function del(){
        if(isset($_POST['izbr']))
        {
            $this->id=$_POST['izbrID'];
            $del= new PostDel($this->db,$this->id);
            if($del->del())
                echo "uspesno obrisano";
                $this->admin();
        }
        else{
            $_SESSION['error']="Greska prilikom brisanja komentara";
            $this->redirect('home');
        }


    }
    public function adddo(){
        $naslov = $_POST['naslov'];
        $tekst = $_POST['tekst'];
        $opis = $_POST['opis'];
        $slika = $_FILES['slika']['name'];
        $slika_tmp = $_FILES['slika']['tmp_name'];/*
        $putanja ="img/".$slika;*/
        $slika_velicina = $_FILES['slika']['size'];
        if($slika_velicina > 4040000){
            array_push($this->errors, "Maksimalna velicina za sliku je 4.04MB.");
        }
        if(empty($naslov)){
            array_push($this->errors, "Opis ne sme biti prazan.");
            echo ("Naslov ne sme biti prazan!");
        }
        if(empty($tekst)){
            array_push($this->errors, "Tekst ne sme biti prazan.");
            echo ("Tekst ne sme biti prazan!");
        }
        if(empty($opis)){
            array_push($this->errors, "Opis ne sme biti prazan.");
            echo ("Opis ne sme biti prazan");
        }

        $putpr='img/'.time().$slika;
        $this->putttt = 'App/assets/'.$putpr;

        if(!move_uploaded_file($slika_tmp, ''.$this->putttt)) {
            array_push($this->errors, "Slika nije uploadoavana");
        }
        if(count($this->errors) > 0) {
            $this->admin();
        }
        else{
        $id_user=$_SESSION['user']->id_user;
        $addom= new PostAdd($this->db, $naslov,$tekst,$putpr,$opis,$id_user);
        $addom->add();
        $_SESSION['uspeh']="Uspesno dodat post";
        $this->admin();
        }
    }
    public function admin(){
        $postModel = new Post($this->db);
        $posts = $postModel->getAll();
        $this->view('adminP',[
            "title" => "Admin page",
            "posts" => $posts
        ]);

    }
    public function getOne(){

        if(isset($_GET['id']))
        {
            $this->id=$_GET['id'];
            $post = new PostOne($this->db,$this->id);
            $comm = new commOne($this->db,$this->id);
            $data = $post->getOne();
            $data1 = $comm->getAll();
            $this->view('post',[
                "posts" =>$data,
                "komm"=>$data1
            ]);
        }
        else $this->view(404,[
           "error" =>"Nije pronadjen post"
        ]);
    }

}