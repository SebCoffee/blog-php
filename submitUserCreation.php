<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // ON ENVOI LES DONNEES VERS LA BDD
    $req = $bdd->prepare('INSERT INTO user (pseudo,email,password) VALUES (:pseudo,:email,:password)');
    $req->execute(array('pseudo' => $pseudo, 'email' => $email, 'password' => $password));
    // UN FOIS LES DONNEES ENVOYEES EN BDD ON REDIRIGE VERS LA PAGE D'ADMINISTRATION DES UTILISATEURS
    header('Location: userAdmin.php');
    $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}
?>