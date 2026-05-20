<?php
namespace Controleur;

class CtrlAccueil extends Controleur {
    public function index() {
        $rest = new \Modele\Restaurant();
        return ['restaurants' => $rest->getRestaurants()];
    }
}