<?php

namespace App\Controllers\PostsController;
use \App\Models\PostsModel;
use \PDO;
include_once '../app/models/postsModel.php';

function indexAction(PDO $connexion){
    $posts = PostsModel\findAll($connexion);

    GLOBAL $content, $title;

    $title = "Derniers articles";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, Int $id){
    $post = PostsModel\findOneById($connexion, $id);

    GLOBAL $content, $title;

    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}