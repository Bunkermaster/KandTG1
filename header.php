<?php
function activeOuPas($page)
{
    // if?
    // $_SERVER['PHP_SELF']
    return ' class="active"';
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
                <li<?=activeOuPas('index.php')?>><a href="index.php">Teletubbies</a></li>
                <li<?=activeOuPas('kittens.php')?>><a href="kittens.php">Kittens</a></li>
                <li<?=activeOuPas('ironmaiden.php')?>><a href="ironmaiden.php">Iron Maiden</a></li>
                <li<?=activeOuPas('16horsepower.php')?>><a href="16horsepower.php">16 Horse power</a></li>
                <li<?=activeOuPas('manga.php')?>><a href="manga.php">Manga</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">