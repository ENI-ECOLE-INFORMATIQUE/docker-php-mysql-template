<?php
require '../connexion/connexion.php';

$query = 'SELECT libelle, prix FROM articles WHERE identifiant = 1;';
$arr = $pdo->query($query)->fetch();
var_dump($arr);

echo 'Article : ' . $arr['libelle'] . ' à ' . $arr[1] . ' €<br>';
