<?php
use \App\Controllers\PostsController;
if(isset($_GET['posts'])):
    include '../app/routers/posts.php';
elseif(isset ($_GET['users'])):
    include_once '../app/routers/users.php';
else:
    include_once '../app/controllers/postsController.php';
    PostsController\indexAction($connexion);
endif;