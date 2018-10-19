<?php
$pageTitle = "contactez-nous";
require_once('frontHeader.php'); ?>

    <div class="entities-group" style="margin-bottom: 8%">
        <form action="submitContact.php" method="post" id="contacform">
            <div class="form-group">
                <p> Votre email : <input class="form-control" type="email" name="email" required="required"/></p>
            </div>
            <div class="form-group">
                <p> Sujet : <input class="form-control" type="text" name="subject" required="required"/></p>
            </div>
            <div class="from-group">
                <p>Message : <textarea class="form-control" rows="15" style="resize: vertical !important;"
                                       name="message" required="required"></textarea></p>
            </div>

            <p><input type="submit"></p>
        </form>
    </div>

<?php require_once('footer.php'); ?>