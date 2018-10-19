<?php
session_start();
if ($_SESSION['isAdmin'] == true) {
    require_once('config/functions.php');
    if (isset($_GET['id']) && is_numeric($_GET['id'])) { //SI IL Y A UN ID EN URL ON ESSAYE DE RECUPÉRER L'UTILISATEUR CORRESPONDANT
        $user = getUserById($_GET['id']);
        $pageTitle = "Edition utilisateur";
    } else{// SINON LE FORMULAIRE SERA VIDE.
        $pageTitle="Création utilisateur";
    }


    require_once('header.php'); ?>

    <form id="register_form">
        <?php
        if ($user) {
            echo "<h1>Edition de l'utilisateur</h1>";
        } else {
            echo "<h1>Nouvel utilisateur</h1>";
        }
        ?>
        <div id="error_msg"></div>
        <div>
            <input type="text" name="username" placeholder="Username" id="username"
                   onblur="usernameCheck(usernameCallBack);" value=<?= $user->pseudo ?>>
            <span></span>
        </div>
        <div>
            <input type="email" name="email" placeholder="Email" id="email" onblur="emailCheck(emailCallBack);"
                   value=<?= $user->email ?>>
            <span></span>
        </div>
        <div>
            <input type="password" name="password" placeholder="mot de passe" id="password"
                   onchange="validatePassword()">
        </div>
        <div>
            <input type="password" name="confirm_password" placeholder="confirmez le mot de passe" id="confirm_password"
                   onkeyup="validatePassword()">
        </div>
        <div>
            <button type="button" name="register" id="reg_btn" onclick="submitForm();"> Créer le compte</button>
        </div>
    </form>

    <?php

    require_once('footer.php');

    if ($user) {
        echo '<script src="assets/scripts/updateUserScript.js"></script>';
    } else {
        echo '<script src="assets/scripts/createUserScript.js"></script>';

        echo '
        <script>
            $(document).ready(function () {
                var username_state = false;
                var email_state = false;
            });
        </script>   
        ';
    }
} else {
    header('location: login.php');
} ?>
<script>
    var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
        if ($('#password').val() !== $('#confirm_password').val()) {
            $('#confirm_password').addClass('invalid');

        } else {
            $('#confirm_password').removeClass('invalid');
            $('#confirm_password').addClass('valid');
        }
    }
</script>