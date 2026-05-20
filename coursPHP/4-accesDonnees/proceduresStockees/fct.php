<?php
require_once '../connexion/connexion.php';

$id = 2;
$query = 'SELECT nomArticle(:id);';
$prep = $pdo->prepare($query);
$prep->bindValue(':id', $id);
$prep->execute();
//PDO::FETCH_NUM (int)
//Spécifie que la méthode de récupération doit retourner chaque ligne dans un tableau indexé par le numéro des colonnes
// comme elles sont retournées dans le jeu de résultats correspondant, en commençant à 0.
$arr= $prep->fetch(PDO::FETCH_NUM);
var_dump($arr);

echo 'Article : ' . $arr[0];
