<?php

include '../app/controllers/usersController.php';
use \App\Controllers\UsersController;

switch ($_GET['users']) {

    case 'login':
        UsersController\loginAction($connexion, ['email' => $_POST['email'], 'password' => $_POST['password']]);
        break;

    default:
        UsersController\loginFormAction();
        break;
}