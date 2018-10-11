<?php
    try{        
        $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','blog_access','blog_password');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // POUR AFFICHER LES ERREURS DE CONNEXION
    }
    catch(PDOException $e){
        echo 'Connexion impossible';
    }  
    ?>