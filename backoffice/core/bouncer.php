<?php
if(!isset($_SESSION['user'])):
    header('Location: '.BASE_URL.'users/login-form');
endif;