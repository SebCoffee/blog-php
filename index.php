<?php
require_once('config/functions.php');
$posts = getLatestPosts();
?>

<?php
$pageTitle = "Home";
require_once('frontHeader.php'); ?>
    <h1>Articles: </h1>
    <table class="table table-stripped">
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>auteur</th>
            <th>date de création</th>
            <th>dernière édition</th>
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
                <td><a href="viewPost.php?id=<?= $post->id ?>">Lire la suite</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php require_once('footer.php'); ?>