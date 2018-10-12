<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) { // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
        header('Location: postAdmin.php');
    } else {
        require_once('config/functions.php');
        $post = getPostById($_GET['id']);
    }
    ?>

    <?php
    $pageTitle = "édition d'un article";
    require_once('header.php'); ?>
    <form action="submitPostEdition.php" method="post" id="postCreationForm">
        <p> titre : <textarea name="title"><?= $post->title ?></textarea></p>
        <p> contenu : <textarea name="content"><?= $post->content ?></textarea></p>
        <ul>
            <li><input type="radio" name="status" value="draft" required checked><label>Brouillon</label></li>
            <!-- par defaut l'édition provoque la mise en brouiilon de l'article-->
            <li><input type="radio" name="status" value="published"><label>Publié</label></li>
        </ul>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
        <!-- à voir pour stocker l'Id en session par la suite -->
        <p><input type="submit"></p>
    </form>
    <?php require_once('footer.php');
} else {
    header('location: login.php');
}
?>