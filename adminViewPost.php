<?php
if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) { // Si l'id n'est pas transmis ou n'est pas un nombre  => retour à la page d'accueil
    header('Location: index.php');
} else {
    require_once('config/functions.php');
    $post = getPostById($_GET['id']);
}
?>

<?php
$pageTitle = $post->title; ?>

    <article class="align-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto my-2">
                    <h1 class="section-heading"><?= $post->title ?></h1>
                    <p> écrit le <time><?= $post->creation_date ?></time>
                        par <?= $post->author ?>
                        dernière édition le <time><?= $post->edition_date ?></time>
                    </p>
                    <p><?= $post->content ?></p>

                </div>
            </div>
        </div>
    </article>

    <hr/>
