<?php
require '../connexion/connexion.php';

$query = 'SELECT libelle, prix FROM articles WHERE identifiant = 1;';
$arr = $pdo->query($query)->fetch(PDO::FETCH_NAMED);
var_dump($arr);

echo 'Article : ' . $arr['libelle'] . ' à ' . $arr['prix'] . ' €<br>';
