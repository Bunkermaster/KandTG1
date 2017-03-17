<?php

// on stocke les informations de connexion à la bdd pour plus de clarté
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kandt";

try {
    // on stocke la requete de connexion à la bdd dans une variable
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
catch(PDOException $e) {
    die($e->getMessage());
}
// on exécute la requete et on la paramètre en ut8 pour éviter les erreurs dues aux accents
$pdo->exec('SET NAMES UTF8');
