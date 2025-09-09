<?php

namespace App\Controllers\PagesController;
use \PDO;
use \App\Models\PagesModel;

function dashboardAction(PDO $connexion){
    GLOBAL $content, $title;

    $title = 'Dashboard';

    ob_start();
    include '../app/views/pages/dashboard.php';
    $content = ob_get_clean();
}