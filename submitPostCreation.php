<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
    $title = htmlspecialchars($_POST['title']);
    $image = htmlspecialchars($_POST['image']);
    $content = htmlspecialchars($_POST['content']);
    $status = htmlspecialchars($_POST['status']);
    $author = $_SESSION['authUser']; //=============================================>>>>>> A changer avec la conexion de l'utilisateur
    // ON ENVOI LES DONNEES VERS LA BDD
    $req = $bdd->prepare('INSERT INTO post (title,image,content,status,creation_date,edition_date,author) VALUES (:title,:image,:content,:status, NOW(), NOW(),:author)');
    $req->execute(array('title' => $title, 'image' => $image, 'content' => $content, 'status' => $status, 'author' => $author));
    $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}
?>