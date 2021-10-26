<?php
// Import de la classe utilisateur avec require pour faire crash l'app si ça ne l'importe pas
require './class/Utilisateur.class.php';
// Initialisation du tableau pour l'avoir même s'il est vide
$users = [];
// Créations des différents users
$user1 = new Utilisateur('Donald', 'Trump');
$user2 = new Utilisateur('Barack', 'Obama');
$user3 = new Utilisateur('Hilary', 'Clinton');
// Ajout des différents users au tableau
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
            // Boucle qui parcourt le tableau users et affiche un li avec la fonction getName pour afficher tout les noms prénoms des users en liste
            foreach($users as $user) {
                echo('<li>'.$user->getName().'</li>');
            }
        ?>
    </ul>
</body>
</html>