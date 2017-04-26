<?php
/**
 * Created by PhpStorm.
 * User: Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 26/04/2017
 * Time: 10:20
 */
// je me connecte, weeeee
require_once dirname(__DIR__)."/connaicte.php";
$data = $_POST;
if(count($data) === 0 || (isset($data['slug']) && $data['slug'] == '')) {
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
    $sql = "UPDATE
              `page`
            SET
              `h1`= :h1,
              `description`= :description,
              `img`= :img,
              `slug`= :slug,
              `nav-title`= :navtitle,
              `alt`= :alt
            WHERE
              `id` = :id
            ;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', htmlentities($data['id']), PDO::PARAM_INT);
    $stmt->bindValue(':h1', htmlentities($data['h1']), PDO::PARAM_STR);
    $stmt->bindValue(':description', htmlentities($data['description']), PDO::PARAM_STR);
    $stmt->bindValue(':img', htmlentities($data['img']), PDO::PARAM_STR);
    $stmt->bindValue(':slug', htmlentities($data['slug']), PDO::PARAM_STR);
    $stmt->bindValue(':alt', htmlentities($data['alt']), PDO::PARAM_STR);
    $stmt->bindValue(':navtitle', htmlentities($data['nav-title']), PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt->errorCode() !== "00000") {
        die($stmt->errorInfo()[2]);
    }
    header("Location: index.php");
}