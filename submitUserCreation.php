<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');

    if (isset($_POST['username_check'])) {
        $username = htmlspecialchars($_POST['username']);
        $req = $bdd->prepare("SELECT * FROM user WHERE pseudo='$username'");
        $req->execute();
        if ($req->rowCount() > 0) {
            echo "taken";
        } else {
            echo 'not_taken';
        }
        exit();
    }
    if (isset($_POST['email_check'])) {
        $email = htmlspecialchars($_POST['email']);
        $req = $bdd->prepare("SELECT * FROM user WHERE email='$email'");
        $req->execute();
        if ($req->rowCount() > 0) {
            echo "taken";
        } else {
            echo 'not_taken';
        }
        exit();
    }
    if (isset($_POST['save'])) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $req = $bdd->prepare("SELECT * FROM user WHERE pseudo='$username'");
        $req->execute();
        if ($req->rowCount() > 0) {
            echo "exists";
            exit();
        } else {
            $query = "INSERT INTO user (pseudo, email, password) VALUES ('$username', '$email', '$password')";
            $req = $bdd->prepare($query);
            $req->execute();
            echo 'Saved!';
            exit();
        }
    }
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}
?>