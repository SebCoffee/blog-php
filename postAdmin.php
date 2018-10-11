<?php
require_once('config/functions.php');
$posts = getPostsForAdmin();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | Tous les articles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <h1>Articles: </h1>
    <?php foreach($posts as $post): ?>
        <h2>#<?=$post->id?> - <?= $post->title ?></h2>
        <p> ecrit le : <time><?= $post->creation_date?></time> par <?= $post->author?></p>
        <p>dernière édition : <time><?= $post->edition_date ?></time></p>
        <p> status du post : <?= $post->status?> </p>
        <a href="viewPost.php?id=<?=$post->id ?>">Lire la suite</a>
        <a href="editPost.php?id=<?=$post->id ?>">Editer</a>
        <a href="deletePost.php?id=<?=$post->id ?>">Supprimer</a>
    <?php endforeach; ?>
</body>
</html>