<?php
/**
 * Created by PhpStorm.
 * User: Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 25/04/2017
 * Time: 17:01
 */
// je me connecte, weeeee
require_once dirname(__DIR__)."/connaicte.php";
function slugDejaPris(PDO $pdo, $slug)
{
    $sql = "SELECT count(*) as le_count FROM `page` WHERE slug = :slug";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':slug', htmlentities($slug));
    $stmt->execute();
    if ($stmt->errorCode() !== "00000") {
        die($stmt->errorInfo()[2]);
    }
    return (bool) $stmt->fetch()[0];
}
if(count($_POST) === 0 || $_POST['slug'] == '' || slugDejaPris($pdo, $_POST['slug'] ?? '')) {
    $data = $_POST;
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
    $sql = "INSERT INTO
              `page`
              (`h1`, `description`, `img`, `alt`, `slug`, `nav-title`)
            VALUES
              (:h1, :description, :img, :alt, :slug, :navtitle)
            ;";
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