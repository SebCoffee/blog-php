<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Admin| Nouvel article </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>
    <form action="submitPostCreation.php" method="post" id="postCreationForm">
        <p> titre : <input type="text" name="title"/> </p>
        <p> contenu : <textarea name="content" ></textarea> </p>
        <p>status : </p>
        <ul>
            <li><input type="radio" name="status" value="draft" checked><label>Brouillons</label></li><!-- par defaut la creation provoque la mise en brouillon de l'article-->
            <li><input type="radio" name="status" value="published"><label>publié</label></li>
        </ul>
        <p><input type="submit"></p>
    </form>
</body>
</html>