<?php

require_once '../app/functions.php';



$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        echo (new HomeController)->index();
        break;
    case 'articles':
        echo (new ArticlesController)->index();
        break;
    case 'article':
        echo (new ArticlesController)->viewArticle();
        break;
    case 'about-us':
        echo (new InfoController)->aboutUs();
        break;
    case 'login':
        echo (new UsersController)->login();
        break;
    case 'log-out':
        echo (new UsersController)->logOut();
        break;
    case 'registration':
        echo (new UsersController)->register();
        break;
    case 'chat':
        echo (new ChatController)->chat();
        break;


    default:
        echo (new ErrorsController)->error404();
}
