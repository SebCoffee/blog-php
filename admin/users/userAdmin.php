<?php
require_once('../config/functions.php');
$posts = getUsers();
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
    <?php foreach($users as $user): ?>
        <h2>#<?=$user->id?> - <?= $user->pseudo ?></h2>
        <p>email : <time><?= $post->email ?></time></p>        
        <a href="editUser.php?id="<?=$user->id ?>">Editer</a>
        <a href="deleteUser.php?id="<?=$user->id ?>">Supprimer</a>
    <?php endforeach; ?>
</body>
</html>