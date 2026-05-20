<?php
require_once 'Controleur/Controleur.php';
require_once 'Modele/Restaurant.php';

class CtrlAccueil extends Controleur {
    public function index() {
        $rest = new Restaurant();
        return ['restaurants' => $rest->getRestaurants()];
    }
}