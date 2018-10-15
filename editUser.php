<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) { // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
        header('Location: userAdmin.php');
    } else {
        require_once('config/functions.php');
        $user = getUserById($_GET['id']);
        include('submitUserEdition.php');
    }
    ?>

    <?php require_once('header.php'); ?>

<form id="register_form">
        <h1>Inscription</h1>
        <div id="error_msg"></div>
        <input id="id" type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
	    <div>
	 	    <input type="text" name="username" placeholder="Username" id="username" required="required" onblur="usernameCheck();"value=<?= $user->pseudo ?>>
	        <span></span>
	    </div>
	    <div>
	        <input type="email" name="email" placeholder="Email" id="email" required="required" onblur="emailCheck();"value=<?= $user->email ?>>
		    <span></span>
	    </div>
	    <div>
	        <input type="password" name="password" placeholder="Password" id="password" >
        </div>
        <div>
            <input type="password" name="passwordConfirm" placeholder="PasswordConfirm" id="passwordConfirm" >
        </div>
	    <div>
	 	    <button type="button" name="register" id="reg_btn">modifier le compte</button>
	    </div>
    </form>
   
    <?php require_once('footer.php');?>
    <script src="assets/scripts/updateUserScript.js"></script>
    <?php
} else {
    header('location: login.php');
}

?>