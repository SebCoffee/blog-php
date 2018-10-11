<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){ // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
    header('Location: postAdmin.php');
}else{
    require_once('config/functions.php'); 
    $post  = getPostById($_GET['id']);
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Admin| Edition d'un article </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <form action="submitPostEdition.php" method="post" id="postCreationForm">
        <p> titre : <textarea name="title"><?=$post->title?></textarea> </p>
        <p> contenu : <textarea name="content"><?=$post->content?></textarea> </p>
        <ul>
            <li><input type="radio" name="status" value="draft" required checked><label>Brouillon</label></li> <!-- par defaut l'édition provoque la mise en brouiilon de l'article-->
            <li><input type="radio" name="status" value="published"><label>Publié</label></li>
        </ul>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" /> <!-- à voir pour stocker l'Id en session par la suite -->
        <p><input type="submit"></p>
    </form>
</body>
</html>