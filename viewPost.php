<?php
if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) { // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
    header('Location: index.php');
} else {
    require_once('config/functions.php');
    $post = getPostById($_GET['id']);
}
?>

<?php
$pageTitle = $post->title;
require_once('frontHeader.php'); ?>

    <h1><?= $post->title ?></h1>
    <p><?= $post->content ?></p>
    <p> écrit le
        <time><?= $post->creation_date ?></time>
        par <?= $post->author ?> </p>
    <p> dernière édition le
        <time><?= $post->edition_date ?></time>
    </p>
    <hr/>

<?php require_once('footer.php'); ?>