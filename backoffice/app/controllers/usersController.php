<?php
namespace App\Controllers\UsersController;
use \PDO;
use \App\Models\UsersModel;

function logoutAction(){
    unset($_SESSION['user']);
    header('Location: '.BASE_URL.'users/login-form');
}
function indexAction(PDO $connexion){
    include '../app/models/usersModel.php';
    $users = UsersModel\findAll($connexion);

    GLOBAL $content, $title;

    $title = "Liste des utilisateurs";

    ob_start();
    include '../app/views/users/index.php';
    $content = ob_get_clean();
    
}