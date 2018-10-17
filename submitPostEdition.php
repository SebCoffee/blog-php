<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
    $title = htmlspecialchars($_POST['title']);
    $content = $_POST['content'];// non sécurisé pour tintMCE qui s'occupe lui meme de gérer la plus grande partie des XSS & co
    $status = htmlspecialchars($_POST['status']);
    $id = htmlspecialchars($_POST['id']);

    echo "titre = " . $title . "<br/>";
    echo "contenu = " . $content . "<br/>";
    echo "status = " . $status . "<br/>";
    echo "id = " . $id . "<br/>";

    // ON ENVOI LES DONNEES VERS LA BDD
    $req = $bdd->prepare('UPDATE post SET title = :title, content = :content, status = :status, edition_date= NOW() WHERE id= :id');
    $req->execute(array('title' => $title, 'content' => $content, 'status' => $status, 'id' => $id));
    // UN FOIS LES DONNEES ENVOYEES EN BDD ON REDIRIGE VERS LA PAGE ADMINISTRATION DES POSTS
   // header('Location: postAdmin.php');
    $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soummettre ce formulaire - rien n'a été modifié";
}

?>