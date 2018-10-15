<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    $pageTitle = "création d'un utilisateur";
    require_once('header.php'); 
    include('submitUserCreation.php');?>   
    <form id="register_form">
        <h1>Inscription</h1>
        <div id="error_msg"></div>
	    <div>
	 	    <input type="text" name="username" placeholder="Username" id="username" required="required" onblur="usernameCheck(usernameCallBack);">
	        <span></span>
	    </div>
	    <div>
	        <input type="email" name="email" placeholder="Email" id="email" required="required" onblur="emailCheck(emailCallBack);">
		    <span></span>
	    </div>
	    <div>
	        <input type="password" name="password" placeholder="Password" id="password" required="required">
        </div>
        <div>
            <input type="password" name="passwordConfirm" placeholder="PasswordConfirm" id="passwordConfirm" required="required">
        </div>
	    <div>
	 	    <button type="button" name="register" id="reg_btn" onclick="submitForm();"> Créer le compte</button>
	    </div>
    </form>
   
    <?php require_once('footer.php');?>
    <script src="assets/scripts/createUserScript.js"></script>
    <?php
} else {
    header('location:login.php');
}

?>