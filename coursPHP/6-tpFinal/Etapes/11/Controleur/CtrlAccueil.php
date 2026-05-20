<?php
namespace Controleur;

class CtrlAccueil extends \Framework\Controleur\Controleur {
    public function index() {
        $rest = new \Modele\Restaurant();
        return ['restaurants' => $rest->getRestaurants()];
    }
}