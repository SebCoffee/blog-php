<?php
require_once('config/functions.php');
$posts = getPosts();
?>

<?php
$pageTitle = "tous les articles";
require_once('frontHeader.php'); ?>
    <div class="entities-group">
        <h1>Articles: </h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?php foreach ($posts as $post):?>
                        <div class="post-preview">
                            <a href="viewPost.php?id=<?= $post->id ?>">
                                <h2 class="post-title">
                                    <?= $post->title ?>
                                </h2>
                            </a>
                            <p class="post-meta">Posted by
                                Crée le <time> <?= $post->creation_date ?> <time>
                                        par <?= $post->author ?>
                                        dernière édition le <time><?= $post->edition_date ?></time></p>
                        </div>
                    <?php endforeach;?>
                    <hr>
                </div>
            </div>
        </div>
    </div>
<?php require_once('footer.php'); ?>