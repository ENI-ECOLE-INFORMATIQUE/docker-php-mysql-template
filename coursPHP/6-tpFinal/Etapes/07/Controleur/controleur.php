<?php
require_once 'Modele/Restaurant.php';
require_once 'Modele/Avis.php';

function accueil() {
    $rest = new Restaurant();
    $restaurants = $rest->getRestaurants();
    require 'Vue/vueAccueil.php';
}

function restaurant() {
    $idRestaurant = filter_input(INPUT_GET, 'idRestaurant', FILTER_VALIDATE_INT);
    if(!$idRestaurant) {
        throw new Exception('L\'identifiant du restaurant doit être un nombre', 400);
    }
    $rest = new Restaurant();
    $restaurant = $rest->getRestaurant($idRestaurant);
    if(!$restaurant) {
        throw new Exception('Ce restaurant n\'existe pas', 404);
    }
    $av = new Avis();
    $avis = $av->getAvis($idRestaurant);
    require 'Vue/vueRestaurant.php';
}