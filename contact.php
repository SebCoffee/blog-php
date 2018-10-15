<?php
$pageTitle = "contactez-nous";
require_once('frontHeader.php'); ?>

<form action="submitContact.php" method="post" id="contacform">
    <p> Votre email : <input type="email" name="email" required="required"/></p>
    <p> Sujet : <input type="text" name="subject" required="required"/></p>
    <p>Message : <textarea name="message" required="required"></textarea></p>
    <p><input type="submit"></p>
</form>

<?php require_once('footer.php'); ?>