<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require_once('config/connect.php');
    require_once('config/functions.php');
    $posts = getLatestPostsForAdmin();
    $msgs = getLatestMessages();
    $users = getUsers();
    $pageTitle = "Administration";
    require_once('header.php');
    ?>

    <h1>Derniers articles: </h1>
    <table class="table table-stripped">
        <tr><th>id</th>
            <th>titre</th>
            <th>auteur</th>
            <th>date de création</th>
            <th>dernière édition</th>
            <th>status</th>
            <th></th>
            <th></th>
            <th><a href="createPost.php">Créer un nouvel article</a></th>
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

    <h1>Derniers messages: </h1>
    <table class="table table-stripped">
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>email</th>
            <th>date de création</th>
            <th></th>
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
                <td>
                    <a href="viewMessage.php?id=<?= $msg->id ?>">voir le message</a>
                </td>
                <td>
                    <a href="deleteMessage.php?id=<?= $msg->id ?>"
                       onClick="confirm('êtes vous sur de vouloir supprimer ?');">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Utilisateurs: </h1>
    <table class="table table-stripped">
        <tr>id
            <th>titre</th>
            <th>pseudo</th>
            <th>email</th>
            <th></th>
            <th></th>
            <th><a href="createUser.php">Créer un nouvel Utilisateur</a></th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>#<?= $user->id ?></td>
                <td><?= $user->pseudo ?></td>
                <td><?= $user->author ?></td>
                <td><?= $user->email ?></td>
                <td><a href="editUser.php?id=<?= $user->id ?>">Voir / Editer</a></td>
                <td><a href="deleteUser.php?id=<?= $user->id ?>"
                       onClick="confirm('êtes vous sur de vouloir supprimer ?');">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <?php
    require_once('footer.php');
} else {
    header('Location: login.php');
} ?>
