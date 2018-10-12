<?php
session_start();

if ($_SESSION['isAdmin'] == true) {

    if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) { // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
        header('Location: contactAdmin.php');
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
    <p><?= $Message->content ?></p>
    <p> écrit le
        <time><?= $Message->creation_date ?></time>
    </p>
    <?php require_once('footer.php');
} else {
    header('location: login.php');
}
?>