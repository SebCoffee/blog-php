<?php
session_start();

if ($_SESSION['isAdmin'] == true) {
    require_once('config/functions.php');
    $users = getUsers();
    ?>

    <?php
    $pageTitle = "Administration des utilisateurs";
    require_once('header.php'); ?>

    <h1>Utilisateurs: </h1>
    <table class="table table-stripped">
        <tr><th>id</th>
            <th>titre</th>
            <th>pseudo</th>
            <th>email</th>
            <th></th>
            <th><a href="editUser.php">Créer un nouvel Utilisateur</a></th>
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

    <?php require_once('footer.php');

} else {
    header('location: login.php');
}

?>