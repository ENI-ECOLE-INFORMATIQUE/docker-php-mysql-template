<?php
require_once 'Controleur/controleur.php';

try {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if(!isset($action)||!$action) {
        accueil();
    } elseif($action == 'restaurant') {
        restaurant();
    } else {
        throw new Exception('Action inexistante', 404);
    }
} catch(PDOException $e) {
    afficherErreur('L\'accès aux données a échoué : ' . $e->getMessage());
} catch(Exception $e) {
    switch($e->getCode()) {
        case 400 : header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request'); break;
        case 404 : header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found'); break;
    }
    afficherErreur($e->getMessage());
}

function afficherErreur(string $msgErreur) {
    $vue = new Vue('Erreur');
    $vue->afficher(['msgErreur' => $msgErreur]);
}