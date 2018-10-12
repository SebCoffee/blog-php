<?php
require_once('config/connect.php');
session_start();

if (isset($_POST["username"]) && isset($_POST["password"])) {
    echo "username and password submited<br/>";
    $username = $_POST["username"];
    $password = $_POST["password"];

    $req = $bdd->prepare("SELECT pseudo,password, id FROM user WHERE pseudo like :username");
    $req->execute(array("username" => $username));
    $data = $req->fetch(PDO::FETCH_OBJ);
    echo var_dump($data);
    //echo $data."<br/>";
    echo $username . "==" . $data->pseudo . "<br/>";
    echo $password . "==" . $data->password . "<br/>";
    $isValid = password_verify($password, $data->password);

    if ($isValid) {
        echo "isValid = true<br/>";
        echo $isValid;
        $_SESSION['isAdmin'] = $isValid;
        echo $_SESSION['isAdmin'];
        $_SESSION['authUser'] = $username;
        $_SESSION['id'] = $data->id;
        header('Location: indexAdmin.php');
    }

}
$pageTitle = "Connexion";
require_once('frontHeader.php');

?>

    <p> veuillez vous connecter pour accéder à cette partie du blog </p>
    <form method="POST">
        <div>
            <input id="username" type="text" name="username" placeholder="Username">
        </div>
        <div>
            <input id="password" type="password" name="password" placeholder="Passowrd">
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
    </form>
<?php
require_once('footer.php');
?>