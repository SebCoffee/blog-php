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
    <script src="assets/lib/bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">[ ~THE BLOG~ ]</a>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="indexAdmin.php" class="nav-link">Administration générale</a></li>
                    <li class="nav-item active"><a href="postAdmin.php" class="nav-link">Administration des Articles</a></li>
                    <li class="nav-item active"><a href="contactAdmin.php" class="nav-link">Administration des Messages</a></li>
                    <li class="nav-item active"><a href="userAdmin.php" class="nav-link">Administration des Utilisateurs</a></li>
                </ul>
           </div>
            <div class="my-2 my-lg-0">
                <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['authUser']?></a>
                    <div class="dropdon-menu">
                        <a href="editUser.php?id=<?=$_SESSION['id']?>" class="dropdown-item"> Mon compte </a>
                        <a href="logout.php" class="dropdown-item">Déconnexion</a>
                    </div>
                </li>       
                </ul>         
            </div>
        </nav>
    </div>
   
</header>