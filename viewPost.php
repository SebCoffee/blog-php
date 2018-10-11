<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){ // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
    header('Location: index.php');
}else{
    require_once('config/functions.php'); 
    $post  = getPostById($_GET['id']);
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | <?= $post->title?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <h1><?= $post->title?></h1>
    <p><?= $post->content ?></p>
    <p> écrit le <time><?= $post->creation_date?></time> par <?=$post->author?> </p>
    <p> dernière édition le <time><?= $post->edition_date?></time></p>
    <hr />  
</body>
</html>