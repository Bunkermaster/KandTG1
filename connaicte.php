<?php
try {
    $pdo = new PDO('mysql:dbname=kandtg1;host=localhost;port=3306','root','root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec('SET NAMES UTF8;');
