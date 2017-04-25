<?php
// @todo preparer les requetes pour le CrUD
// connexion a la base de donnees
require_once "connaicte.php";
// recuperation du slug (unique) de la page demandee dans $slug
// si pas de page demandee, affichage de la page par defaut
if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
} else {
    $slug = "les-teletubbies";
}
// version php 7+ du if ci-dessus
//$slug = $_GET['slug'] ?? "teletubbies"; // php 7+
// requete SQL pour recuperer la page qui correspond au $slug
$sql = "SELECT
  `id`,
  `h1`,
  `description`,
  `img`,
  `alt`,
  `slug`,
  `nav-title`
FROM
  `page`
WHERE
  `slug` = :slug
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':slug', $slug, PDO::PARAM_STR);
$stmt->execute();
// gestion des erreur SQL potentielles
if ($stmt->errorCode() !== '00000') {
    die($stmt->errorInfo()[2]);
}
// recuperation de la page
$row = $stmt->fetch(PDO::FETCH_ASSOC);
// gestion des erreurs de slugs inexstants
if($row === false){
    header("HTTP/1.0 404 Not Found");
    require "404.php";
    exit;
}
// construction de la page
require "header.php";
require "template.php";
require "footer.php";
