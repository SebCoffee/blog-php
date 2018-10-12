<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
    $id = htmlspecialchars($_POST['id']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);

    if (!empty($_POST['password'])) { //SI LE CHAMP PASSWORD EST N'EST PAS VIDE => MODIFICATION DU MOT DE PASSE
        $$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $req = $bdd->prepare('UPDATE user SET pseudo = :pseudo, email = :email, password= :password WHERE id= :id');
        $req->execute(array('pseudo' => $pseudo, 'email' => $email, 'password' => $password, 'id' => $id));
    } else { // LE CHAMP MOT DE PASSE EST VIDE => PAS DE MODIFICATION DU MOT DE PASSE
        $req = $bdd->prepare('UPDATE user SET pseudo = :pseudo, email = :email WHERE id= :id');
        $req->execute(array('pseudo' => $pseudo, 'email' => $email, 'id' => $id));
    }
    header('Location: postAdmin.php');
    $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}
?>