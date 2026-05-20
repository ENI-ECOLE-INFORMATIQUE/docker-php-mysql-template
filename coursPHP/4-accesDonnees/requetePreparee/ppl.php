<?php
require '../connexion/connexion.php';

$prixMax = 40;
$query = 'SELECT libelle, prix FROM articles WHERE prix < :prixMax;';
$prep = $pdo->prepare($query);
$prep->bindValue(':prixMax', $prixMax);
$prep->execute();
$arrAll = $prep->fetchAll(PDO::FETCH_NUM);
var_dump($arrAll);

for ($i = 0; $i < count($arrAll); $i++) {
    echo 'Article : ' . $arrAll[$i][0] . ' à ' . $arrAll[$i][1] . ' €<br>';
}
