<?php
use \App\Controllers\PostsController;
if(isset($_GET['posts'])):
    include '../app/routers/posts.php';
else:
    include_once '../app/controllers/postsController.php';
    PostsController\indexAction($connexion);
endif;