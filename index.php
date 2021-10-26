<?php
// Import de la classe utilisateur avec require pour faire crash l'app si ça ne l'importe pas
require './class/Utilisateur.class.php';
// Initialisation du tableau pour l'avoir même s'il est vide
$users = [];
$csv = file( './users.csv' );

foreach($csv as $row) {
    $data = explode(';', $row);
    $user = new Utilisateur($data[0], $data[1]);
    $user->setMail($data[2]);
    $users[] = $user;
}
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
            // Boucle qui parcourt le tableau users et affiche un li avec la fonction getName pour afficher tout les noms prénoms des users en liste
            foreach($users as $user) {
                echo('<li>'.$user->getName().' - '.$user->getMail().'</li>');
            }
        ?>
    </ul>
</body>
</html>