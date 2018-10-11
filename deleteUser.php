<?php
    require ('config/connect.php');

    $id = htmlspecialchars($_GET['id']);

    $req = $bdd->prepare('DELETE FROM user WHERE id= :id');
    $req->execute(array('id'=>$id));
    header('Location: userAdmin.php');
    $req->CloseCursor();
?>