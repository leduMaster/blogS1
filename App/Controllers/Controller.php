<?php

namespace App\Controllers;

class Controller {

    protected function redirect($page) {
        header("Location: " . $page);
    }
    protected function view($fileName, $data = []){

        extract($data);
        
        include "App/views/commponents/head.php";
        include "App/views/commponents/nav.php";
        include "App/views/pages/$fileName.php";
        include "App/views/commponents/footer.php";
    }
}