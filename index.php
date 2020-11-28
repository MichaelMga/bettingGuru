<?php

require 'db/connexion.php';

require 'const.php';

require 'controllers/leaguesController.php';




$request = $_SERVER['REQUEST_URI'];

//HERE IS OUR ROUTER. ALL THE REQUESTS ARE DIRECTED THERE USING THE HTACCESS FILE. WE THEN DIRECT THE REQUESTS AS WE PLEASE.

$root = '/bettingguru/';



switch ($request) {
    case $root :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case $root . 'ligue1' :

        seeOneChampionship('2664');

        break;
    
    case $root . 'ligue1' . '?gameId=' . $_GET['gameId'];

        seeOneGame($_GET['gameId']);

       break;
      
              
    default:
        http_response_code(404);

        echo 'error';

        break;
}

