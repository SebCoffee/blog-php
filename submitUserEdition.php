<?php
    require('config/connect.php');
    // ON ECHAPPE TOUT LES CARACTERES POUR EVITER LES INJECTIONS DE CODE
    $id = htmlspecialchars($_POST['id']);
        $title = htmlspecialchars($_POST['pseudo']);
        $content = htmlspecialchars($_POST['email']);    

        if(!empty($_POST['password'])){ //SI LE CHAMP PASSWORD EST N'EST PAS VIDE => MODIFICATION DU MOT DE PASSE
            $password = htmlspecialchars($_POST['password']);
            $req = $bdd->prepare('UPDATE user SET pseudo = :pseudo, email = :email, password= :password WHERE id= :id');
            $req->execute(array('pseudo'=>$pseudo,'email'=>$email,'password'=>$password,'id'=>$id));  
        }else{ // LE CHAMP MOT DE PASSE EST VIDE => PAS DE MODIFICATION DU MOT DE PASSE
            $req = $bdd->prepare('UPDATE user SET pseudo = :pseudo, email = :email WHERE id= :id');
            $req->execute(array('pseudo'=>$pseudo,'email'=>$email,'id'=>$id));  
        } 
        header('Location: postAdmin.php');
        $req->CloseCursor();
?>