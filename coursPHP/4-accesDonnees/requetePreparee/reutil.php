<?php
require '../connexion/connexion.php';

$query = 'INSERT INTO articles(libelle, prix) VALUES(:libelle, :prix);';
$prep = $pdo->prepare($query);
$prep->bindParam(':libelle', $libelle);
$prep->bindParam(':prix', $prix);

$libelle = 'Tomates 🍅';
$prix = 23.1;
$prep->execute();

$libelle = 'Aubergines 🍆';
$prix = 15.7;
$prep->execute();

require '../afficheTousLesArticles.php';
