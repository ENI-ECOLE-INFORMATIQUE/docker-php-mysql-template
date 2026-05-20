<?php
$idRestaurant = filter_input(INPUT_GET, 'idRestaurant', FILTER_VALIDATE_INT);
if(!$idRestaurant) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
    die('L\'identifiant du restaurant doit être un nombre');
}
require_once 'Modele/modeleRestaurant.php';
$restaurant = getRestaurant($idRestaurant);
if(!$restaurant) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    die('Ce restaurant n\'existe pas');
}
$avis = getAvis($idRestaurant);
require 'Vue/vueRestaurant.php';