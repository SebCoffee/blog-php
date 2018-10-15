<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | <?= $pageTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/lib/bootstrap/css/bootstrap.css"/>
    <script src="assets/scripts/jquery-3.3.1.min.js"></script>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/lib/js/bootstrap.bundle.js"></script>
</head>
<body>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">[ ~THE BLOG~ ]</a>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item active"><a href="viewAllPosts.php" class="nav-link">Tous les articles</a></li>
                    <li class="nav-item active"><a href="contact.php" class="nav-link">Contactez-nous</a></li>
                </ul>
           </div>
           <div class="my-2 my-lg-0">
                <a href="login.php">Connexion à l'espace admin</a>
            </div>
        </nav>
    </div>
</header>
