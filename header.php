<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | <?= $pageTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/lib/bootstrap/css/bootstrap.css"/>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/lib/js/bootstrap.bundle.js"></script>
</head>
<body>
<header>
    <div>
        <nav>
            <ul>
                <li><a href="indexAdmin.php">Administration générale</a></li>
                <li><a href="postAdmin.php">Administration des Articles</a></li>
                <li><a href="contactAdmin.php">Administration des Messages</a></li>
                <li><a href="userAdmin.php">Administration des Utilisateurs</a></li>
            </ul>
        </nav>
    </div>
    <div>
        <a href="logout.php">Déconnexion</a>
    </div>
</header>