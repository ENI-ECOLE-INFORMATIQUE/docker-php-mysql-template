<?php
require_once 'Modele/modeleRestaurant.php';

function accueil() {
    $restaurants = getRestaurants();
    require 'Vue/vueAccueil.php';
}

function restaurant() {
    $idRestaurant = filter_input(INPUT_GET, 'idRestaurant', FILTER_VALIDATE_INT);
    if(!$idRestaurant) {
        throw new Exception('L\'identifiant du restaurant doit être un nombre', 400);
    }
    $restaurant = getRestaurant($idRestaurant);
    if(!$restaurant) {
        throw new Exception('Ce restaurant n\'existe pas', 404);
    }
    $avis = getAvis($idRestaurant);
    require 'Vue/vueRestaurant.php';
}