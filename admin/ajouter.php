<?php
/**
 * Created by PhpStorm.
 * User: Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 25/04/2017
 * Time: 17:01
 */
// je me connecte, weeeee
require_once dirname(__DIR__)."/connaicte.php";
if(count($_POST) === 0) {
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
        <p>
            <label for="slug">Slug</label></br>
            <input type="text" name="slug" placeholder="slug en kebabcase">
        </p>
        <p>
            <label for="h1">h1</label></br>
            <input type="text" name="h1" placeholder="h1">
        </p>
        <p>
            <label for="description">description</label></br>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
        </p>
        <p>
            <label for="img">img</label></br>
            <input type="text" name="img" placeholder="img">
        </p>
        <p>
            <label for="alt">alt</label></br>
            <input type="text" name="alt" placeholder="alt">
        </p>
        <p>
            <label for="nav-title">nav-title</label></br>
            <input type="text" name="nav-title" placeholder="nav-title">
        </p>
        <p>
        <p>
            <input type="submit" value="Ajouter">
        </p>
    </form>
    </body>
    </html>
<?php
} else {
    var_dump($_POST);
}