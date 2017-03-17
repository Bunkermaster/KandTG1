<?php
require_once "connect.php";

if(isset($_GET['slug'])){
    $slug = $_GET['slug'];
} else {
    $slug = 'les-teletubbies';
}



//$slug = $GET_['slug'] ?? "les-teletubbies"; //php 7+

$sql = "SELECT `h1`, `description`, `img`, `alt`, `slug` FROM `page` WHERE slug = :slug";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':slug', $slug);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

//if(!$row){
//    header("HTTP/1.0 404 Not Found");
//    require "404.php";
//    exit;
//}

require "header.php";
require "template.php";
require "footer.php";
?>


