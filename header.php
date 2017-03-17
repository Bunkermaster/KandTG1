<?php
/**
 * @param string $page nom de la page dont le lien est généré
 * @return string class="active" si la page dont le lien est généré est la page courante
 */
function activeOuPas($leslug)
{
    // récupération du nom de fichier à partir du chemin
    if($_GET['slug'] == $leslug){
        // si la page à lier est la même que la page courante, active!
        return ' class="active"';
    }
}

$sql = "SELECT `nav-title`, `slug`  FROM `page`";
$stmtNav = $pdo->prepare($sql);
$stmtNav->execute();
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
                <?php while($rowNav = $stmtNav->fetch(PDO::FETCH_ASSOC)): ?>
                <li<?=activeOuPas($rowNav['slug'] )?>><a href="index.php?slug=<?= $rowNav['slug'] ?>"><?= $rowNav['nav-title'] ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">