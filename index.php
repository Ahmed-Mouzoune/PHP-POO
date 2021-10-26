<?php
// Connexion à la bdd
$pdo = new PDO('mysql:host=localhost;port=8888;dbname=poo','root','root');
// SELECT de tout les users en fonction de l'id
$sql = 'SELECT * FROM users where id = :idParam';
$req = $pdo->prepare($sql);
// Bind de la requête pour récupérer l'id dans le get et PDO::PARAM_INIT pour ne pas subir d'injection sql
$req->bindParam('idParam',$_GET['id'], PDO::PARAM_INT);
$req->execute();
// Fetch pour récupérer le résultat de la requête
$res = $req->fetch(PDO::FETCH_ASSOC);
// Initialisation du tableau pour l'avoir même s'il est vide
$users = [];
// Boucle pour faire les utilisateurs avec la bdd
foreach( $res as $data ) {
    $user = new Utilisateur($data[0],$data[1],$data[2],$data[3]);
    $users[] = $user;
} 
// Import de la classe utilisateur avec require pour faire crash l'app si ça ne l'importe pas
require './class/Utilisateur.class.php';
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