<?php

function getPosts(){ //RECUPERE LES ARTICLES EN BDD
    require('../config/connect.php');
    $req = $bdd->prepare('SELECT id, title, edition_date FROM post ORDER BY edition_date DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getPostById($id){ //RECUPÈRE LE POST EN BDD PAR SON ID
    require('../config/connect.php');
    $req = $bdd->prepare('SELECT * FROM post WHERE id = ?');
    $req->execute(array($id));
    if($req->rowCount() == 1){ // SI ON OBTIENT BIEN UN RESULTAT ALORS ON LE RETOURNE (ID EST UNIQUE DONC PAS DE RISQUE D'AVOIR UN ROWCOUNT > 1)
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    } else{ // SI PAS DE RESULTAT ALORS ON RENVOIT VERS LA PAGE D'ACCUEIL
        header('Location: index.php');
    } 
    $req->CloseCursor();
} 

function getLatestPosts(){ //RECUPERE LES 5 DERNIER ARTICLES
    require('config/connect.php');
    $req = $bdd->prepare('SELECT id, title, edition_date FROM post ORDER BY edition_date DESC LIMIT 5');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
} 

function getUser(){ //RECUPERE LES UTILISATEURS EN BDD
    require('../config/connect.php');
    $req = $bdd->prepare('SELECT id, pseudo, email FROM user ORDER BY pseudo');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getUserById($id){ //RECUPÈRE L' UTILISATEUR EN BDD PAR SON ID
    require('../config/connect.php');
    $req = $bdd->prepare('SELECT * FROM user WHERE id = ?');
    $req->execute(array($id));
    if($req->rowCount() == 1){ // SI ON OBTIENT BIEN UN RESULTAT ALORS ON LE RETOURNE (ID EST UNIQUE DONC PAS DE RISQUE D'AVOIR UN ROWCOUNT > 1)
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    } else{ // SI PAS DE RESULTAT ALORS ON RENVOIT VERS LA PAGE D'ACCUEIL
        header('Location: userAdmin.php');
    } 
    $req->CloseCursor();
} 

function getMessage(){ //RECUPERE LES MESSAGES EN BDD
    require('../config/connect.php');
    $req = $bdd->prepare('SELECT id, title, email, date_creation FROM message ORDER BY date_creation DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getMessageById($id){//RECUPÈRE LE MESSAGE EN BDD PAR SON ID
    require('../config/connect.php');
    $req = $bdd->prepare('SELECT * FROM message WHERE id = ?');
    $req->execute(array($id));
    if($req->rowCount() == 1){ // SI ON OBTIENT BIEN UN RESULTAT ALORS ON LE RETOURNE (ID EST UNIQUE DONC PAS DE RISQUE D'AVOIR UN ROWCOUNT > 1)
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    } else{ // SI PAS DE RESULTAT ALORS ON RENVOIT VERS LA PAGE D'ACCUEIL
        header('Location: contactAdmin.php');
    } 
    $req->CloseCursor();
} 
?>