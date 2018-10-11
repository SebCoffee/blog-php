<?php
require_once('config/functions.php');
$messages = getMessage();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | Tous les messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <h1>Articles: </h1>
    <?php foreach($messages as $message): ?>
        <h2>#<?=$message->id?> - <?= $message->subject ?></h2>
        <p>émetteur : <?= $message->email ?></p>
        <p>message : <?= $message->content ?></p>
        <a href="deleteMessage.php?id="<?=$message->id ?>>Supprimer</a>
    <?php endforeach; ?>
</body>
</html>