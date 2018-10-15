<?php
session_start();
if ($_SESSION['isAdmin'] == true) {
    require_once('config/functions.php');
    if(isset($_GET['id']) && is_numeric($_GET['id'])){ //SI IL Y A UN ID EN URL ON ESSAYE DE RECUPÉRER L'UTILISATEUR CORRESPONDANT
        $user = getUserById($_GET['id']);
    } // SINON LE FORMULAIRE SERA VIDE.
    
    if($user){
        include("submitUserEdition.php");
    } 
    else{
        include("submitUserCreation.php");
    } 
    require_once('header.php'); ?>

 <form id="register_form">
        <h1>Inscription</h1>
        <div id="error_msg"></div>
	    <div>
	 	    <input type="text" name="username" placeholder="Username" id="username" onblur="usernameCheck(usernameCallBack);" value=<?= $user->pseudo ?>>
	        <span></span>
	    </div>
	    <div>
	        <input type="email" name="email" placeholder="Email" id="email" onblur="emailCheck(emailCallBack);" value=<?= $user->email ?>>
		    <span></span>
	    </div>
	    <div>
	        <input type="password" name="password" placeholder="Password" id="password">
        </div>
        <div>
            <input type="password" name="confirm_password" placeholder="PasswordConfirm" id="confirm_password">
        </div>
	    <div>
	 	    <button type="button" name="register" id="reg_btn" onclick="submitForm();"> Créer le compte</button>
	    </div>
    </form>

   
   
    <?php 
    require_once('footer.php');
    if($user){
        echo '<script src="assets/scripts/updateUserScript.js"></script>';
    } 
    else{
        echo '<script src="assets/scripts/createUserScript.js"></script>';
    } 
}else {
    header('location: login.php');
}?>
<script>
$(document).ready(function(){

    //from : https://codepen.io/diegoleme/pen/surIK

    var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Les mots de passe ne correspondent pas");
    } else {
        confirm_password.setCustomValidity('');
    }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

   

});
</script>