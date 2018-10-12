<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $status = htmlspecialchars($_POST['status']);
    $author = "admin"; //=============================================>>>>>> A changer avec la conexion de l'utilisateur
    // ON ENVOI LES DONNEES VERS LA BDD
    $req = $bdd->prepare('INSERT INTO post (title,content,status,creation_date,edition_date,author) VALUES (:title,:content,:status, NOW(), NOW(),:author)');
    $req->execute(array('title' => $title, 'content' => $content, 'status' => $status, 'author' => $author));
    // UN FOIS LES DONNEES ENVOYEES EN BDD ON REDIRIGE VERS LA PAGE ADMINISTRATION DES POSTS
    header('Location: postAdmin.php');
    $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}
?>