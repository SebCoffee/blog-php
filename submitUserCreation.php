<?php
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
    // ON ENVOI LES DONNEES VERS LA BDD
        $req = $bdd->prepare('INSERT INTO user (pseudo,email,password) VALUES (:pseudo,:email,:password)');
        $req->execute(array('pseudo'=>$pseudo,'email'=>$email,'password'=>$password));        
    // UN FOIS LES DONNEES ENVOYEES EN BDD ON REDIRIGE VERS LA PAGE D'ADMINISTRATION DES UTILISATEURS
        header('Location: userAdmin.php');
        $req->CloseCursor();
?>