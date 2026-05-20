<?php
require '../connexion/connexion.php';

$query = 'SELECT libelle, prix FROM articles WHERE identifiant = 1;';
$arr = $pdo->query($query)->fetch(PDO::FETCH_NUM);
var_dump($arr);

echo 'Article : ' . $arr[0] . ' à ' . $arr[1] . ' €<br>';
