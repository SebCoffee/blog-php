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

<form action="actions/submitContact.php" method="post" id="contacform">
<p> Votre email :   <input type="text" name="email" required="required"/></p>
<p> Sujet :         <input type="text" name="subject" required="required"/></p>
<p>Message :        <textarea name="message" required="required"></textarea></p>
<p><input type="submit"></p>
</form>
    
</body>
</html>