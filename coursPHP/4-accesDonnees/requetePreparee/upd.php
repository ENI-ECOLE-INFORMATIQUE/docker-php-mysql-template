<?php
require '../connexion/connexion.php';

$libelle = 'Ananas';

$query = 'UPDATE articles SET prix = prix/2 WHERE libelle LIKE :libelle;';
$prep = $pdo->prepare($query);
$prep->bindValue(':libelle', "%$libelle%");
$prep->execute();
echo "Nombre de lignes modifiées : " . $prep->rowCount() . '<br>';

require '../afficheTousLesArticles.php';
