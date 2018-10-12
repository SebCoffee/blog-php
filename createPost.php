<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    $pageTitle = "creation d'un article";
    require_once('header.php'); ?>
    <form action="submitPostCreation.php" method="post" id="postCreationForm">
        <p> titre : <input type="text" name="title"/></p>
        <p> contenu : <textarea name="content"></textarea></p>
        <p>status : </p>
        <ul>
            <li><input type="radio" name="status" value="draft" checked><label>Brouillons</label></li>
            <!-- par defaut la creation provoque la mise en brouillon de l'article-->
            <li><input type="radio" name="status" value="published"><label>publié</label></li>
        </ul>
        <p><input type="submit"></p>
    </form>
    <?php require_once('footer.php');
} else {
    header('location: login.php');
}
?>