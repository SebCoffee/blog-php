<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require_once('config/connect.php');
    require_once('config/functions.php');
    $msgs = getMessages();
    ?>

    <?php $pageTitle = "Administration des messages";
    require_once('header.php');
    ?>
    <div class="entities-group">
        <h1>Messages: </h1>
        <table class="table table-stripped">
            <tr>
                <th>id</th>
                <th>titre</th>
                <th>email</th>
                <th>date de création</th>
                <th></th>
            </tr>
            <?php foreach ($msgs as $msg): ?>
                <tr>
                    <td>#<?= $msg->id ?></td>
                    <td><?= $msg->subject ?></td>
                    <td><?= $msg->email ?></td>
                    <td>
                        <time><?= $msg->creation_date ?>
                            <time>
                    </td>
                    <td><a href="javascript:void(0);" data-href="viewMessage.php?id=<?= $msg->id ?>" class="openPopup">voir le message</a></td>
                    <td><a href="deleteMessage.php?id=<?= $msg->id ?>"
                           onClick="confirm('êtes vous sur de vouloir supprimer ?');">Supprimer</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Voir un messsage</h4>
                    <button type="button" class="close" data-dismiss="modal" style="float:left !important">&times;</button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>

        </div>
    </div>
    <?php require_once('footer.php');
} else {
    header('location: login.php');
}

?>
<script>
    $(document).ready(function(){
        $('.openPopup').on('click',function(){
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL,function(){
                $('#myModal').modal({show:true});
            });
        });
    });
</script>
