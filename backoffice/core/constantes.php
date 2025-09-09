<?php

define('ADMIN_BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . explode('index.php', $_SERVER['PHP_SELF'])[0]);
define('BASE_URL', str_replace('backoffice', 'publicoffice', ADMIN_BASE_URL));
// Ne jamais faire ceci sur un server. Faisable que sur le notre (pas en prod), en local. Mise en danger de la sécurité. affichage des données du serveur. Porte ouverte aux conneries.
// phpinfo(); die();
//Attention inverer les constantes par rapport au public office !!!! logique en même temps