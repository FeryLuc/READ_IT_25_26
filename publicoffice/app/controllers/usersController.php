<?php
namespace App\Controllers\UsersController;
use \App\Models\UsersModel;
use \PDO;

function loginFormAction(){
    GLOBAL $content, $title;
    $title = "User Connection";

    ob_start();
    include '../app/views/users/loginForm.php';
    $content = ob_get_clean();
}

function loginAction(PDO $connexion, array $data){
    include '../app/models/usersModel.php';
    $user = UsersModel\findOneByEmailAndPassword($connexion, $data);
    if($user):
        $_SESSION['user'] = $user;
        header('Location: '. ADMIN_BASE_URL . 'dashboard');
    else:
        header('Location: '.BASE_URL.'users/login-form');
    endif;
}