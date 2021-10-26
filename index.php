<?php
require './class/Utilisateur.class.php';

$users = [];
$user1 = new Utilisateur('Donald', 'Trump');
$user2 = new Utilisateur('Barack', 'Obama');
$user3 = new Utilisateur('Hilary', 'Clinton');

$users[] = $user1;
$users[] = $user2;
$users[] = $user3;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre</title>
</head>
<body>
    <ul>
        <?php
            foreach($users as $user) {
                echo('<li>'.$user->getName().'</li>');
            }
        ?>
    </ul>
</body>
</html>