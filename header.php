<?php
/**
 * @param string $page nom de la page dont le lien est généré
 * @return string class="active" si la page dont le lien est généré est la page courante
 */
function activeOuPas($page)
{
    // récupération du nom de fichier à partir du chemin
    if(pathinfo($_SERVER['PHP_SELF'])['filename'] == $page){
        // si la page à lier est la même que la page courante, active!
        return ' class="active"';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li<?=activeOuPas('index')?>><a href="index.php">Teletubbies</a></li>
                <li<?=activeOuPas('kittens')?>><a href="kittens.php">Kittens</a></li>
                <li<?=activeOuPas('ironmaiden')?>><a href="ironmaiden.php">Iron Maiden</a></li>
                <li<?=activeOuPas('16horsepower')?>><a href="16horsepower.php">16 Horse power</a></li>
                <li<?=activeOuPas('manga')?>><a href="manga.php">Manga</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">