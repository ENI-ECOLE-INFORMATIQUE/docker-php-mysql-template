<?php
require_once './tp1cnx.php';

$ajouter = filter_input(INPUT_POST, 'ajouter', FILTER_SANITIZE_SPECIAL_CHARS);
if ($ajouter) {
    $req = $pdo->prepare('INSERT INTO modeles(id_modele, marque, modele, carburant) ' .
            'VALUES(:id_modele, :marque, :modele, :carburant);');
    $req->bindValue(':id_modele', filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
    $req->bindValue(':marque', filter_input(INPUT_POST, 'marque', FILTER_SANITIZE_SPECIAL_CHARS));
    $req->bindValue(':modele', filter_input(INPUT_POST, 'modele', FILTER_SANITIZE_SPECIAL_CHARS));
    var_dump(filter_input(INPUT_POST, 'carburant', FILTER_SANITIZE_SPECIAL_CHARS));
    $req->bindValue(':carburant', filter_input(INPUT_POST, 'carburant', FILTER_SANITIZE_SPECIAL_CHARS));
    $req->execute();
    $req->closeCursor();
}
