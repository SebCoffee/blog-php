<?php
    require ('config/connect.php');

    $id = htmlspecialchars($_GET['id']);

    $req = $bdd->prepare('DELETE FROM post WHERE id= :id');
    $req->execute(array('id'=>$id));
    header('Location: postAdmin.php');
    $req->CloseCursor();
?>