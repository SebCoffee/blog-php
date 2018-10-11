<?php
    require ('config/connect.php');

    $id = htmlspecialchars($_GET['id']);

    $req = $bdd->prepare('DELETE FROM contact WHERE id= :id');
    $req->execute(array('id'=>$id));
    header('Location: contactAdmin.php');
    $req->CloseCursor();
?>