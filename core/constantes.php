<?php

define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . explode('index.php', $_SERVER['PHP_SELF'])[0]);

// Ne jamais faire ceci sur un server. Faisable que sur le notre (pas en prod), en local. Mise en danger de la sécurité. affichage des données du serveur. Porte ouverte aux conneries.
// phpinfo(); die();