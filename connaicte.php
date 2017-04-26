<?php
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

try {
    $pdo = new PDO('mysql:dbname=kandtg1;host=localhost;port=3306','root','root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec('SET NAMES UTF8;');
