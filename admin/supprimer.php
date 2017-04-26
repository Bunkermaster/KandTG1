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
if(count($data) === 0) {
    if (!isset($_GET['id'])) {
        header("Location: index.php");
        exit;
    }
    $sql = "SELECT
              `id`,
              `slug`
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
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <p>Voulez vous supprimer la page "<?=$data['slug']?>"</p>
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <input type="submit" value="Oui">
        <input type="button" value="Non" onclick="history.back()">
    </form>
    </body>
    </html>
    <?php
} else {
    $sql = "DELETE FROM
              `page`
            WHERE
              `id` = :id
            LIMIT 1
            ;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $data['id'], PDO::PARAM_INT);
    $stmt->execute();
    if ($stmt->errorCode() !== "00000") {
        die($stmt->errorInfo()[2]);
    }
    header("Location: index.php");
}
