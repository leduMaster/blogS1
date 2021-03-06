<?php

session_start();
require_once "App/config/autoload.php";
require_once "App/config/database.php";

use App\Models\DB;
use App\Controllers\PageController;
use App\Controllers\UserController;
use App\Controllers\PostController;
use App\Controllers\CommentController;


$db = new DB(SERVER, DATABASE, USERNAME, PASSWORD);

$pageController = new PageController($db);
$userController = new UserController($db);
$postController = new PostController($db);
$komController = new CommentController($db);
if(isset($_GET['page'])){
    switch($_GET['page']){
        case "login":
            $pageController->login();
            break;
        case "comAdd":
            $komController->comAdd();
            break;
        case "logout":
            $userController->logout();
            break;
        case "about":
            $pageController->about();
            break;
        case "post": 
            $postController->getOne();
            break;
        case "posts": 
            $pageController->home();
            break;
        case "komdel": 
            $komController->del();
            break;
        case "regUser":
            $userController->reg();
            break;
        case "reg":
            $pageController->register();
            break;
        case "index": 
            $pageController->home();
            break;
        case "lgin":
            $userController->lgin();
            break;
        case "home":
        $pageController->home();
            break;
        case "admin/add":
            $postController->admin();
            break;
        case "admin/adddo":
            $postController->adddo();
            break;
        case "admin/edit":
            $postController->edit();
            break;
        case "admin/editdo":
            $postController->editdo();
            break;
        case "admin/Del":
            $postController->del();
            break;
        default:
            $pageController->status404();
    }
}
else {
    $pageController->home();
}
