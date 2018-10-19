<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
    $title = htmlspecialchars($_POST['title']);
    $image = htmlspecialchars($_POST['image']);
    $content = $_POST['content'];// non sécurisé pour tintMCE qui s'occupe lui meme de gérer la plus grande partie des faille XSS
    $status = htmlspecialchars($_POST['status']);
    $id = htmlspecialchars($_POST['id']);

    // ON ENVOI LES DONNEES VERS LA BDD
    $req = $bdd->prepare('UPDATE post SET title = :title,image= :image, content = :content, status = :status, edition_date= NOW() WHERE id= :id');
    $req->execute(array('title' => $title, 'image' => $image, 'content' => $content, 'status' => $status, 'id' => $id));
    $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soummettre ce formulaire - rien n'a été modifié";
}

?>