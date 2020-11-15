<?php

$dsn = 'mysql:dbname=betguruDB;host=localhost';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);

       echo "connexion ok";

    } catch (PDOException $e) {

       echo 'Connexion échouée : ' . $e->getMessage();

    }
    

    
    
