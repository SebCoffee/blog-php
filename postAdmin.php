<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require_once('config/functions.php');
    $posts = getPostsForAdmin();
    ?>

    <?php
    $pageTitle = "Administation des articles";
    require_once('header.php'); ?>
    <h1>Articles: </h1>
    <table class="table table-stripped">
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>auteur</th>
            <th>date de création</th>
            <th>dernière édition</th>
            <th>status</th>
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
                <td><a href="viewPost.php?id=<?= $post->id ?>">Lire la suite</a></td>
                <td><a href="editPost.php?id=<?= $post->id ?>">Editer</a></td>
                <td><a href="deletePost.php?id=<?= $post->id ?>"
                       onClick="confirm('êtes vous sur de vouloir supprimer ?');">Supprimer</a></td>

            </tr>
        <?php endforeach; ?>
    </table>
    <?php
    require_once('footer.php');
} else {
    header('location: login.php');
}
?>