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
    header('Location: userAdmin.php');
    $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}
?>

<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require('config/connect.php');
    $id = $_POST['id']; 
    if (isset($_POST['username_check'])) {       
        $username = htmlspecialchars($_POST['username']); 
        $req = $bdd->prepare("SELECT * FROM user WHERE pseudo=$username AND id <> $id");
        $req->execute();
        if ($req->rowCount() > 0) {
          echo "taken";	
        }else{
          echo 'not_taken';
        }
        exit();
    }
    if (isset($_POST['email_check'])) {
        $email = htmlspecialchars($_POST['email']);
        $req = $bdd->prepare("SELECT * FROM user WHERE email=$email AND id <> $id");
        $req->execute();
        if ($req->rowCount() > 0) {
          echo "taken";	
        }else{
          echo 'not_taken';
        }
        exit();
    }
    if (isset($_POST['save'])) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);       
        $req = $bdd->prepare("SELECT * FROM user WHERE pseudo=$username AND id <> $id");
        $req->execute();
        if ($req->rowCount() > 0) {
          echo "exists";	
          exit();
        }else{
            if (!empty($_POST['password'])) { //SI LE CHAMP PASSWORD EST N'EST PAS VIDE => MODIFICATION DU MOT DE PASSE
                $$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $req = $bdd->prepare('UPDATE user SET pseudo = :username, email = :email, password= :password WHERE id= :id');
                $req->execute(array('pseudo' => $username, 'email' => $email, 'password' => $password, 'id' => $id));
            } else { // LE CHAMP MOT DE PASSE EST VIDE => PAS DE MODIFICATION DU MOT DE PASSE
                $req = $bdd->prepare('UPDATE user SET pseudo = :username, email = :email WHERE id= :id');
                $req->execute(array('pseudo' => $username, 'email' => $email, 'id' => $id));
            }
          echo 'Saved!';
          exit();
        }
    }

    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
//    $pseudo = htmlspecialchars($_POST['pseudo']);
  //  $email = htmlspecialchars($_POST['email']);
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // ON ENVOI LES DONNEES VERS LA BDD
 //   $req = $bdd->prepare('INSERT INTO user (pseudo,email,password) VALUES (:pseudo,:email,:password)');
   // $req->execute(array('pseudo' => $pseudo, 'email' => $email, 'password' => $password));
    // UN FOIS LES DONNEES ENVOYEES EN BDD ON REDIRIGE VERS LA PAGE D'ADMINISTRATION DES UTILISATEURS
   // header('Location: userAdmin.php');
   // $req->CloseCursor();
} else {
    echo "vous devez être connecté pour soumettre ce formulaire - rien n'a été modifié";
}
?>