<?php
include_once '../app/controllers/usersController.php';
use \App\Controllers\UsersController;

switch ($_GET['users']) {
    case 'logout':

        UsersController\logoutAction();
      
        break;
    
    default:
        # code...
        break;
}