<?php
require '../connexion/connexion.php';

$libelle = 'Ananas 🍍';
$prix = 7.2;
$query = 'INSERT INTO articles(libelle, prix) VALUES(:libelle, :prix);';
$prep = $pdo->prepare($query);
$prep->bindValue(':libelle', $libelle);
$prep->bindValue(':prix', $prix);
$prep->execute();
echo "Nombre de lignes insérées : " . $prep->rowCount() . '<br>';

require '../afficheTousLesArticles.php';
