<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require_once('config/functions.php');
    $posts = getPostsForAdmin();
    ?>

    <?php
    $pageTitle = "Administation des articles";
    require_once('header.php'); ?>
    <div class="entities-group card">
        <div class="card-header">
            <h1>Articles: </h1>
        </div>
        <div class="card-body">
            <table class="table table-stripped">
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>auteur</th>
                    <th>date de création</th>
                    <th>dernière édition</th>
                    <th>status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td>#<?= $post->id ?></td>
                        <td><?= $post->title ?></td>
                        <td><?= $post->author ?></td>
                        <td>
                            <time><?= $post->creation_date ?>
                                <time>
                        </td>
                        <td>
                            <time><?= $post->edition_date ?></time>
                        </td>
                        <td><?= $post->status ?></td>
                        <td><a href="javascript:void(0);" data-href="adminViewPost.php?id=<?= $post->id ?>"
                               class="openPopup">Aperçu</a></td>
                        <td><a href="editPost.php?id=<?= $post->id ?>">Editer</a></td>

                        <td><a href="deletePost.php?id=<?= $post->id ?>"
                               onClick="confirm('êtes vous sur de vouloir supprimer ?');">Supprimer</a></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="max-width: 50% !important;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Voir un messsage</h4>
                    <button type="button" class="close" data-dismiss="modal" style="float:left !important">&times;
                    </button>
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
    $(document).ready(function () {
        $('.openPopup').on('click', function () {
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL, function () {
                $('#myModal').modal({show: true});
            });
        });
    });
</script>