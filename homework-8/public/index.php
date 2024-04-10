<?php
require_once '../app/vendor/autoload.php';
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";
require_once "../app/models/Post.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/PostController.php";
require_once __DIR__ . '/vendor/autoload.php';
use app\controllers\MainController;
use app\controllers\UserController;
use app\controllers\PostController;


$url = $_SERVER["REQUEST_URI"];

//todo add a switch statement router to route based on the url
//if it is "/posts" return an array of posts via the post controller
//if it is "/" return the homepage view from the main controller
//if it is something else return a 404 view from the main controller
echo $url;

switch ($url) {
case "/":
    $mainController = new MainController();
    $mainController->homepage();
    break;
case "/post":
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $postController = new PostController();
        $postController->createPost();
    }
    break;
default:
   $mainController = new MainController();
   $mainController->notFound();
   break;
}