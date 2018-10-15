<?php
session_start();

if ($_SESSION['isAdmin'] == true) {

    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) { // Si l'id n'est pas transmis  => retour à la page d'accueil
        echo"aucun ID reçu";
        //header('Location: contactAdmin.php');
    } else {
        require_once('config/functions.php');
        $Message = getMessageById($_GET['id']);
    }

    ?>

    <?php
    $pageTitle = "Tous les messsages";
    require_once('header.php'); ?>
    <h1><?= $Message->subject ?></h1>
    <p> expediteur : <?= $Message->email ?></p>
    <p><?= $Message->message ?></p>
    <p> écrit le
        <time><?= $Message->creation_date ?></time>
    </p>
    <?php require_once('footer.php');
} else {
    header('location: login.php');
}
?>