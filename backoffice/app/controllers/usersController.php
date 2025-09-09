<?php
namespace App\Controllers\UsersController;
function logoutAction(){
    unset($_SESSION['user']);
    header('Location: '.BASE_URL.'users/login-form');
}