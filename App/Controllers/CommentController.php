<?php


namespace App\Controllers;
use App\Models\comm\CommDel;
use App\Models\comm\comAdd;
use App\Models\DB;

class CommentController extends Controller
{
    private $db;
    private $id_posta;
    private $commm;
    private $id_user;
    private $id;
    public  function __construct(DB $db)
    {
        $this->db=$db;
    }
    public function comAdd(){

        if(isset($_POST['komentar']))
        {
            $this->commm = $_POST['komentar'];
            $this->id_user = $_SESSION['user']->id_user;
            $this->id_posta=$_POST['id_p'];

            $add= new comAdd($this->db,
            $this->commm,
            $this->id_posta,
            $this->id_user,
            time());
            $add->comAdd();
            $this->redirect('index.php?page=post&id='.$this->id_posta);
        }
    }
    public function del(){

        if(isset($_POST['submit']))
        {

            $this->id=$_GET['id_comm'];
            $del= new CommDel($this->db,$this->id);
            if($del->del()){
                $_SESSION['uspe']="Uspesno brisanje komentara";
                $this->redirect('home');
            }
        }
        else{
            $_SESSION['error']="Greska prilikom brisanja komentara";
            $this->redirect('home');
        }

    }
}