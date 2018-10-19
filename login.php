<?php
require_once('config/connect.php');
session_start();

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $req = $bdd->prepare("SELECT pseudo,password, id FROM user WHERE pseudo like :username");
    $req->execute(array("username" => $username));
    $data = $req->fetch(PDO::FETCH_OBJ);
    $isValid = password_verify($password, $data->password);

    if ($isValid) {
        $_SESSION['isAdmin'] = $isValid;
        $_SESSION['authUser'] = $username;
        $_SESSION['id'] = $data->id;
        header('Location: indexAdmin.php');
    }

}
$pageTitle = "Connexion";
require_once('frontHeader.php');

?>
    <div class="centered" style="width: 50%">
        <form id="register_form" method="POST">
            <h1>Connexion</h1>
            <div id="error_msg"></div>
            <div>
                <input type="text" name="username" placeholder="Username" id="username"
                       onblur="usernameCheck(usernameCallBack);">
                <span></span>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" id="password">
            </div>

            <div>
                <button type="submit" name="register" id="reg_btn"> Connexion</button>
            </div>
        </form>
    </div>

<?php
require_once('footer.php');
?>