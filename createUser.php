<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | Contact </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <script src="assets/scripts/main.js"></script>
</head>
<body>

    <form action="submitUserCreation.php" method="post" id="userCreationForm">
        <p>pseudo: <input type="text" name="pseudo" required="required"></p>
        <p>email: <input type="email" name="email" required="required"></p>
        <p> password : <input type="password" name="password"/> </p>  
        <p> password confirm : <input type="password" name="passwordconfirm"/> </p>     
        <p><input type="submit"></p>
    </form>
</body>
</html>