<?php
require_once '../connexion/connexion.php';

$id = 3;

$query = 'CALL info(:id);';
$prep = $pdo->prepare($query);
$prep->bindValue(':id', $id);

$prep->execute();
//PDO::FETCH_NAMED (int)
// Spécifie que la méthode de récupération doit retourner chaque ligne dans un tableau indexé par les noms des colonnes
// comme elles sont retournées dans le jeu de résultats correspondant.
// Si le jeu de résultats contient de multiples colonnes avec le même nom,
// PDO::FETCH_NAMED retourne un tableau de valeurs par nom de colonne.
$arr = $prep->fetch(PDO::FETCH_NAMED);
var_dump($arr);

echo 'Article : ' . $arr['libelle'] . ' à ' . $arr['prix'] . ' €.';
