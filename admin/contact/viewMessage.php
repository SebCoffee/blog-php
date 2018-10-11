<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){ // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
    header('Location: contactAdmin.php');
}else{
    require_once('config/functions.php'); 
    $Message  = getMessageById($_GET['id']);
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | <?= $Message->title?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <h1><?= $Message->subject?></h1>
    <p> expediteur : <?= $Message->email ?></p>
    <p><?= $Message->content ?></p>
    <p> écrit le <time><?= $Message->creation_date?></time></p> 
</body>
</html>