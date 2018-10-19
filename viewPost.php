<?php
if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) { // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
    header('Location: index.php');
} else {
    require_once('config/functions.php');
    $post = getPostById($_GET['id']);
}
?>

<?php
$pageTitle = $post->title;
require_once('frontHeader.php'); ?>

    <div class="entites-group" style="margin-bottom: 8%">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto my-2 card" style="margin: 20px;padding: 0px !important;">
                    <div class="card-header">
                        <h1 class="section-heading"><?= $post->title ?></h1>
                    </div>
                    <?php
                    if ($post->image) {
                        echo "<img class='card-img-top' src='$post->image' alt='Card image cap''>";
                    }
                    ?>
                    <div class="card-body">
                        <p><?= $post->content ?></p>
                    </div>

                    <div class="card-footer">
                        <p> écrit le
                            <time><?= $post->creation_date ?></time>
                            par <?= $post->author ?>
                            dernière édition le
                            <time><?= $post->edition_date ?></time>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require_once('footer.php'); ?>