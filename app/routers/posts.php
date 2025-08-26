<?php

include_once '../app/controllers/postsController.php';
use \App\Controllers\PostsController;

switch ($_GET['posts']) {
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
        break;
    
    default:
        PostsController\indexAction($connexion);
        break;
}