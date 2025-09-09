<?php
use \App\Controllers\PagesController;
// if (isset()):
// else:
    include '../app/controllers/pagesController.php';
    PagesController\dashboardAction($connexion);
// endif;