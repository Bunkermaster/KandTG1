<?php
/**
 * Created by PhpStorm.
 * User: Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 25/04/2017
 * Time: 15:28
 */
// je me connecte, weeeee
//require_once "../connaicte.php";
require_once dirname(__DIR__)."/connaicte.php";
// recuperation du nombre de pages
$sql = "SELECT count(*) FROM `page`;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$compteur = $stmt->fetch()[0];
// recuperation des pages pour liste
$sql = "SELECT `id`, `slug` FROM `page`;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
if ($stmt->errorCode() !== '00000') {
    die($stmt->errorInfo()[2]);
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des pages</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Slug</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
<?php if($compteur > 0):?>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['slug']?></td>
        <td>Voir</td>
    </tr>
    <?php endwhile;?>
<?php else: ?>
    <tr>
        <td colspan="3">Pas de donn&eacute;es</td>
    </tr>
<?php endif;?>
    </tbody>
</table>
</body>
</html>
