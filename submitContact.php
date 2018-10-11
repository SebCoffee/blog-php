<?php
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
        $email = htmlspecialchars($_POST['email']);
        $msgsubject = htmlspecialchars($_POST['subject']);
        $msg = htmlspecialchars($_POST['message']);
    // ON ENVOI LES DONNEES VERS LA BDD
        $req = $bdd->prepare('INSERT INTO contact (subject,email,message,creation_date) VALUES (:msgsubject,:email,:msg, NOW())');
        $req->execute(array('msgsubject'=>$msgsubject,'email'=>$email,'msg'=>$msg));        
    // UN FOIS LES DONNEES ENVOYEES EN BDD ON REDIRIGE VERS LA PAGE HOME
        header('Location: index.php');
        $req->CloseCursor();
?>