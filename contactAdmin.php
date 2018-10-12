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
    <h1>Messages: </h1>
    <table>
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
                <td><a href="viewMessage.php?id=<?= $msg->id ?>">voir le message</a></td>
                <td><a href="deleteMessage.php?id=<?= $msg->id ?>"
                       onClick="confirm('êtes vous sur de vouloir supprimer ?');">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php require_once('footer.php');
} else {
    header('location: login.php');
}

?>