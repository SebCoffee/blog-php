<?php
require_once('config/functions.php');
$posts = getPosts();
?>

<?php
$pageTitle = "tous les articles";
require_once('frontHeader.php'); ?>
    <div class="entities-group" style="margin-bottom: 8%">
        <h1>Articles: </h1>
        <div class="container">
            <div class="row">
                <div class=" mx-auto">
                    <div class="row">
                        <?php foreach ($posts as $post): ?>
                            <div class="card col-md-3" style="margin: 20px;padding: 0px !important;">
                                <div class="card-header">
                                    <a href="viewPost.php?id=<?= $post->id ?>">
                                        <h2 class="post-title">
                                            <?= $post->title ?>
                                        </h2>
                                    </a>
                                </div>
                                <?php
                                if ($post->image) {
                                    echo "<img class='card-img-top' src='$post->image' alt='Card image cap''>";
                                } else {
                                    echo "<img class='card-img-top' src='https://picsum.photos/300/170/?random' alt='Card image cap''>";
                                }
                                ?>
                                <div class="card-body">
                                    <p class="card-text"><?= $post->preview ?>...</p>
                                    <a href="viewPost.php?id=<?= $post->id ?>" class="btn btn-primary">Lire
                                        l'article</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        Crée le
                                        <time> <?= $post->creation_date ?>
                                            <time>
                                                par <?= $post->author ?>
                                                dernière édition le
                                                <time><?= $post->edition_date ?></time>
                                    </small>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('footer.php'); ?>