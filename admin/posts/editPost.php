<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){ // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
    header('Location: postAdmin.php');
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
    <title>Blog Admin| Nouvel article </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <form action="actions/update/submitPostEdition.php" method="post" id="postCreationForm">
        <p> titre : <input type="text" name="title"value=<?= $post->title?>/> </p>
        <p> contenu : <textarea name="content" value=<?= $post->content?>></textarea> </p>        
    </form>
</body>
</html>