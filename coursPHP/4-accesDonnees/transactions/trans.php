<?php
require_once '../connexion/connexion.php';

$pdo->beginTransaction();

$pdo->query('INSERT INTO articles(identifiant, libelle, prix) VALUES(101, \'mirabelle\', 56.8)');
$pdo->query('INSERT INTO articles(identifiant, libelle, prix) VALUES(102, \'topinambour\', 22.3)');

echo '<p><b>Avant le RollBack</b></p>';
require '../afficheTousLesArticles.php';

$pdo->rollback();

echo '<p><b>Après le RollBack</b></p>';
require '../afficheTousLesArticles.php';
