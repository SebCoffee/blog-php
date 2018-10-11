<?php
require_once('config/functions.php');
$posts = getLatestPosts();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <h1>Articles: </h1>
    <?php foreach($posts as $post): ?>
        <h2>#<?=$post->id?> - <?= $post->title ?></h2>
        <p> ecrit le : <time><?= $post->creation_date?><time> par <?= $post->author?> </p>
        <p>dernière édition le : <time><?= $post->edition_date ?></time></p>
        <a href="viewPost.php?id=<?=$post->id ?>">Lire la suite</a>
    <?php endforeach; ?>
</body>
</html>