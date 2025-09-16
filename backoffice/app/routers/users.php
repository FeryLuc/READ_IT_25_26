<?php
include_once '../app/controllers/usersController.php';
use \App\Controllers\UsersController;

switch ($_GET['users']) {
    case 'logout':

        UsersController\logoutAction();
      
        break;
    case 'index':
    UsersController\indexAction($connexion);
    break;

    case 'new':
        UsersController\addOneAction();
        break;
    default:
        # code...
        break;
}