<?php
try {
    $idRestaurant = filter_input(INPUT_GET, 'idRestaurant', FILTER_VALIDATE_INT);
    if(!$idRestaurant) {
        throw new Exception('L\'identifiant du restaurant doit être un nombre', 400);
    }
    require_once 'Modele/modeleRestaurant.php';
    $restaurant = getRestaurant($idRestaurant);
    if(!$restaurant) {
        throw new Exception('Ce restaurant n\'existe pas', 404);
    }
    $avis = getAvis($idRestaurant);
    require 'Vue/vueRestaurant.php';
} catch(PDOException $e) {
    $msgErreur = 'L\'accès aux données a échoué : ' . $e->getMessage();
    require 'Vue/vueErreur.php';
} catch(Exception $e) {
    switch($e->getCode()) {
        case 400 : header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request'); break;
        case 404 : header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found'); break;
    }
    $msgErreur = $e->getMessage();
    require 'Vue/vueErreur.php';
}