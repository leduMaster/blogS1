<?php


namespace App\Controllers;

use App\Models\user;

class UserController extends Controller
{
    private $db;
    public $pass;
    public $username;
    public $email;
    public $id_uloga;
    public function __construct($db) {
        $this->db = $db;
    }
    public function logout(){
        try{
            unset($_SESSION['user']);
            session_destroy();
           $_SESSION['uspesno']="Uspesno ste se izlogovali";
            $this->view('login');
        }
        catch (\Exception $e)
        {
            return $e;
        }
    }
    public function lgin(){

        if(!isset($_POST["pass"])) {
        array_push($error, "Sifra je obavezna!");
    }
    else {
        $this->pass=$_POST["pass"];}
        if(!isset($_POST["username"])) {
            array_push($error, "Username is required.");
        }
        else {
            $this->username=$_POST["username"];
        }
        $model = new user\login($this->db,$this->username,$this->pass);

        $user = $model->find();


        if($_SESSION['error']&&$user==0) {
            $this->view('login', [
                "error" => $error
            ]);
        }
        if($user&&$user!=0) {
            unset($_SESSION['error']);
            $_SESSION["uspesno"]="Dobrodosli! ".$user->username;
            $this->redirect("index.php?page=home");
        }

    }
    public function reg(){

        if(!isset($_POST['reg']))
        {

            $this->id_uloga= $_POST['Uloga'];
            $this->pass= $_POST['tbPass'];
            $this->email= $_POST['tbEmail'];
            $this->username= $_POST['tbUsername'];

            $regUser = new user\RegUser($this->db,$this->username,$this->pass,$this->email,$this->id_uloga);

            $regUser->regUser();

        }
    }
}