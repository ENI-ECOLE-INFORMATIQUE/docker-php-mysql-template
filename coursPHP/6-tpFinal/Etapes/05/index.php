<?php
require_once 'Modele/modeleRestaurant.php';
try {
    $restaurants = getRestaurants();
    require 'Vue/vueAccueil.php';
} catch(PDOException $e) {
    $msgErreur = 'L\'accès aux données a échoué : ' . $e->getMessage();
    require 'Vue/vueErreur.php';
} catch(Exception $e) {
    $msgErreur = $e->getMessage();
    require 'Vue/vueErreur.php';
}