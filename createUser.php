<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    $pageTitle = "création d'un utilisateur";
    require_once('header.php'); ?>

    <form action="submitUserCreation.php" method="post" id="userCreationForm">
        <p>pseudo: <input type="text" name="pseudo" required="required"></p>
        <p>email: <input type="email" name="email" required="required"></p>
        <p> password : <input type="password" name="password"/></p>
        <p> password confirm : <input type="password" name="passwordconfirm"/></p>
        <p><input type="submit"></p>
    </form>
    <?php require_once('footer.php');
} else {
    header('location:login.php');
}

?>