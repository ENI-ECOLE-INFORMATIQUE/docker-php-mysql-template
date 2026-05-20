<?php
require_once 'Modele/Restaurant.php';
require_once 'Modele/Avis.php';
require_once 'Vue/Vue.php';

function accueil() {
    $rest = new Restaurant();
    $restaurants = $rest->getRestaurants();
    $vue = new Vue('Accueil');
    $vue->afficher(['restaurants' => $restaurants]);
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
    $vue = new Vue('Restaurant', $restaurant['nom']);
    $vue->afficher(['restaurant' => $restaurant, 'avis' => $avis]);
}