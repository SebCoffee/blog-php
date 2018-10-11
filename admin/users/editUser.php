<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){ // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
    header('Location: userAdmin.php');
}else{
    require_once('config/functions.php'); 
    $post  = getUserById($_GET['id']);
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Admin| Edition de l'utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <form action="actions/update/submitUserEdition.php" method="post" id="userEditionForm">
        <p> pseudo : <input type="text" name="title"value=<?= $user->pseudo?>/> </p>
        <p> email : <input type="text" name="title"value=<?= $user->email?>/> </p>  
        <p> password : <input type="text" name="title"value=<?= $user->email?>/> </p>  
        <p> password confirm : <input type="text" name="title"value=<?= $user->email?>/> </p>        
    </form>
</body>
</html>