<?php
// require_once "App/Controllers/Controller.php";
// App\Controllers\Controller
// require_once "App/Controllers/PageController.php";

spl_autoload_register(function($classname){
    // echo $classname;
    // App\Controllers\PageController
    // App/Controllers/PageController
    // App\Controllers\PageController
    $classname = lcfirst($classname);
    $classname = str_replace("\\", DIRECTORY_SEPARATOR, $classname);
    $classname .= ".php";
   // echo $classname;
    require_once $classname;
});