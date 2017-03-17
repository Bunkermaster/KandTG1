<?php
//
require_once "connaicte.php";

if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
} else {
    $slug = "les-teletubbies";
}

//$slug = $_GET['slug'] ?? "teletubbies"; // php 7+

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
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row === false){
    header("HTTP/1.0 404 Not Found");
    require "404.php";
    exit;
}
require "header.php";
require "template.php";
require "footer.php";