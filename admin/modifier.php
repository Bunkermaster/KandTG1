<?php
/**
 * Created by PhpStorm.
 * User: Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 26/04/2017
 * Time: 10:20
 */
// je me connecte, weeeee
require_once dirname(__DIR__)."/connaicte.php";
if(count($_POST) === 0) {
    $labelSubmit = "Modifier";
    if (!isset($_GET['id'])) {
        header("Location: index.php");
        exit;
    }
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
              `id` = :id
            ;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    if ($stmt->errorCode() !== "00000") {
        die($stmt->errorInfo()[2]);
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if (false === $data) {
        header("Location: index.php");
        exit;
    }
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ajouter Page</title>
    </head>
    <body>
    <?php
    require "form-page.php";
    ?>
    </body>
    </html>
    <?php
} else {
    var_dump($_POST);
    die();
    $sql = "";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':h1', htmlentities($_POST['h1']));
    $stmt->bindValue(':description', htmlentities($_POST['description']));
    $stmt->bindValue(':img', htmlentities($_POST['img']));
    $stmt->bindValue(':slug', htmlentities($_POST['slug']));
    $stmt->bindValue(':alt', htmlentities($_POST['alt']));
    $stmt->bindValue(':navtitle', htmlentities($_POST['nav-title']));
    $stmt->execute();
    if ($stmt->errorCode() !== "00000") {
        die($stmt->errorInfo()[2]);
    }
    header("Location: ../?slug=".htmlentities($_POST['slug']));
}