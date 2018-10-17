<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | <?= $pageTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/lib/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type='text/css' href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' >
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' >
    <script src="assets/scripts/jquery-3.3.1.min.js"></script>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">[ ~ THE BLOG ~ ]</a>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="indexAdmin.php" class="nav-link">Administration générale</a></li>
                    <li class="nav-item active"><a href="postAdmin.php" class="nav-link">Administration des Articles</a></li>
                    <li class="nav-item active"><a href="contactAdmin.php" class="nav-link">Administration des Messages</a></li>
                    <li class="nav-item active"><a href="userAdmin.php" class="nav-link">Administration des Utilisateurs</a></li>
                </ul>
           </div>
            <div class="my-2 my-lg-0" style="margin-right: 3%;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['authUser']?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="editUser.php?id=<?=$_SESSION['id']?>" class="dropdown-item"> Mon compte </a>
                            <a href="logout.php" class="dropdown-item">Déconnexion</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
   
</header>