<?php
$label = "Ajouter";
if(isset($labelSubmit)){
    $label = $labelSubmit;
}
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? 0?>">
    <p>
        <label for="slug">Slug</label></br>
        <input type="text" name="slug" placeholder="slug en kebabcase" value="<?=$data['slug'] ?? ''?>">
    </p>
    <p>
        <label for="h1">h1</label></br>
        <input type="text" name="h1" placeholder="h1"value="<?=$data['h1'] ?? ''?>">
    </p>
    <p>
        <label for="description">description</label></br>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"><?=$data['description'] ?? ''?></textarea>
    </p>
    <p>
        <label for="img">img</label></br>
        <input type="text" name="img" placeholder="img"value="<?=$data['img'] ?? ''?>">
    </p>
    <p>
        <label for="alt">alt</label></br>
        <input type="text" name="alt" placeholder="alt"value="<?=$data['alt'] ?? ''?>">
    </p>
    <p>
        <label for="nav-title">nav-title</label></br>
        <input type="text" name="nav-title" placeholder="nav-title"value="<?=$data['nav-title'] ?? ''?>">
    </p>
    <p>
    <p>
        <input type="submit" value="<?=$label?>">
    </p>
</form>
