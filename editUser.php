<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) { // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
        header('Location: userAdmin.php');
    } else {
        require_once('config/functions.php');
        $user = getUserById($_GET['id']);
    }
    ?>

    <?php require_once('header.php'); ?>
    <form action="submitUserEdition.php" method="post" id="userEditionForm">
        <p> pseudo : <input type="text" name="pseudo" value=<?= $user->pseudo ?>></p>
        <p> email : <input type="email" name="email" value=<?= $user->email ?>></p>
        <p> password : <input type="password" name="password"></p>
        <p> password confirm : <input type="password" name="passwordconfirm"></p>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <!-- à voir pour stocker l'Id en session par la suite -->
        <p><input type="submit"></p>
    </form>
    <?php require_once('footer.php');
} else {
    header('location: login.php');
}

?>