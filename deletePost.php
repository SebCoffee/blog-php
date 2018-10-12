<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require_once('config/connect.php');

    $id = htmlspecialchars($_GET['id']);

    $req = $bdd->prepare('DELETE FROM post WHERE id= :id');
    $req->execute(array('id' => $id));
    header('Location:' . $_SERVER['HTTP_REFERER']);
    $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}

?>