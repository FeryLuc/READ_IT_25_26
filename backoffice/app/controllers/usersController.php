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

function addOneAction(){
    global $content, $title;

    $title = "Ajout d'un utilisateur";

    ob_start();
    include '../app/views/users/addForm.php';
    $content = ob_get_clean();
}

function createAction($connexion, $data){
    include '../app/models/usersModel.php';
    $reponse = UsersModel\create($connexion, $data);
    header("Location: ".ADMIN_BASE_URL."users");
        
}