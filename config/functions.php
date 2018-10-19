<?php

function getPosts()
{ //RECUPERE LES ARTICLES EN BDD
    require('connect.php');
    $req = $bdd->prepare('SELECT id, title,image,SUBSTRING(content, 1, 150) AS "preview",edition_date,creation_date,author FROM post WHERE status like "published" ORDER BY edition_date DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getPostsForAdmin()
{ //RECUPERE LES ARTICLES EN BDD
    require('connect.php');
    $req = $bdd->prepare('SELECT id, title,edition_date,creation_date,status,author FROM post ORDER BY edition_date DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getPostById($id)
{ //RECUPÈRE LE POST EN BDD PAR SON ID
    require('connect.php');
    $req = $bdd->prepare('SELECT * FROM post WHERE id = ?');
    $req->execute(array($id));
    if ($req->rowCount() == 1) { // SI ON OBTIENT BIEN UN RESULTAT ALORS ON LE RETOURNE (ID EST UNIQUE DONC PAS DE RISQUE D'AVOIR UN ROWCOUNT > 1)
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    } else { // SI PAS DE RESULTAT ALORS ON RENVOIT VERS LA PAGE D'ACCUEIL
        header('Location: '. $_SERVER['HTTP_REFERER']);
    }
    $req->CloseCursor();
}

function getLatestPosts()
{ //RECUPERE LES 5 DERNIER ARTICLES
    require('connect.php');
    $req = $bdd->prepare('SELECT id, title,image,SUBSTRING(content, 1, 150) AS "preview",edition_date,creation_date,status,author FROM post WHERE status like "published" ORDER BY edition_date DESC LIMIT 5');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getLatestPostsForAdmin()
{ //RECUPERE LES 5 DERNIER ARTICLES
    require('connect.php');
    $req = $bdd->prepare('SELECT id, title,edition_date,creation_date,status,author FROM post ORDER BY edition_date DESC LIMIT 5');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getUsers()
{ //RECUPERE LES UTILISATEURS EN BDD
    require('connect.php');
    $req = $bdd->prepare('SELECT id, pseudo, email FROM user ');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getUserById($id)
{ //RECUPÈRE L' UTILISATEUR EN BDD PAR SON ID
    require('connect.php');
    $req = $bdd->prepare('SELECT * FROM user WHERE id = ?');
    $req->execute(array($id));
    if ($req->rowCount() == 1) { // SI ON OBTIENT BIEN UN RESULTAT ALORS ON LE RETOURNE (ID EST UNIQUE DONC PAS DE RISQUE D'AVOIR UN ROWCOUNT > 1)
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }else{ // SI PAS DE RESULTAT ALORS ON RENVOIT VERS LA PAGE D'ACCUEIL
        header('Location:'. $_SERVER['HTTP_REFERER']);
    }
    $req->CloseCursor();
}

function getMessages()
{ //RECUPERE LES MESSAGES EN BDD
    require('connect.php');
    $req = $bdd->prepare('SELECT id, subject,email,creation_date FROM contact ORDER BY creation_date DESC ');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

function getMessageById($id)
{//RECUPÈRE LE MESSAGE EN BDD PAR SON ID
    require('connect.php');
    $req = $bdd->prepare('SELECT * FROM contact WHERE id = ?');
    $req->execute(array($id));
    if ($req->rowCount() == 1) { // SI ON OBTIENT BIEN UN RESULTAT ALORS ON LE RETOURNE (ID EST UNIQUE DONC PAS DE RISQUE D'AVOIR UN ROWCOUNT > 1)
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    } else { // SI PAS DE RESULTAT ALORS ON RENVOIT VERS LA PAGE D'ACCUEIL
        header('Location:'. $_SERVER['HTTP_REFERER']);
    }
    $req->CloseCursor();
}

function getLatestMessages()
{ //RECUPERE LES 5 DERNIER ARTICLES
    require('connect.php');
    $req = $bdd->prepare('SELECT id, subject,email,creation_date FROM contact ORDER BY creation_date DESC LIMIT 5');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->CloseCursor();
}

?>