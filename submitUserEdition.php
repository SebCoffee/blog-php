<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');
    $id = $_POST['id'];
    if (isset($_POST['username_check'])) {
        $username = htmlspecialchars($_POST['username']);
        $req = $bdd->prepare("SELECT * FROM user WHERE pseudo=:pseudo AND id <> :id");
        $req->execute(array("pseudo"=>$username, "id"=>$id));
        if ($req->rowCount() > 0) {
            echo "taken";
        } else {
            echo 'not_taken';
        }
        $req->CloseCursor();
        exit();

    }
    if (isset($_POST['email_check'])) {
        $email = htmlspecialchars($_POST['email']);
        $req = $bdd->prepare("SELECT * FROM user WHERE email=:email AND id <> :id");
        $req->execute(array("email"=>$email,"id"=>$id));
        if ($req->rowCount() > 0) {
            echo "taken";
        } else {
            echo 'not_taken';
        }
        $req->CloseCursor();
        exit();
    }
    if (isset($_POST['save'])) { //NE FONCTIONNE PAS
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);

        if ($_POST['password'] != '') { //SI LE CHAMP PASSWORD EST N'EST PAS VIDE => MODIFICATION DU MOT DE PASSE
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $req = $bdd->prepare('UPDATE user SET pseudo = :username, email = :email, password = :pswd WHERE id= :id');
            $req->execute(array('pseudo' => $username, 'email' => $email, 'pswd' => $password, 'id' => $id));
        } else { // LE CHAMP MOT DE PASSE EST VIDE => PAS DE MODIFICATION DU MOT DE PASSE
            $req = $bdd->prepare('UPDATE user SET pseudo = :username, email = :email WHERE id= :id');
            $req->execute(array('pseudo' => $username, 'email' => $email, 'id' => $id));
        }
        echo 'Saved!';
        $req->CloseCursor();
        exit();

    }
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}
?>