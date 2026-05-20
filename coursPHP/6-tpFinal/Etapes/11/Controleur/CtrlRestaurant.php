<?php
namespace Controleur;

class CtrlRestaurant extends \Framework\Controleur\Controleur {
    public function index() {
        $idRestaurant = filter_input(INPUT_GET, 'idRestaurant', FILTER_VALIDATE_INT);
        if(!$idRestaurant) {
            throw new \Exception('L\'identifiant du restaurant doit être un nombre', 400);
        }
        $rest = new \Modele\Restaurant();
        $restaurant = $rest->getRestaurant($idRestaurant);
        if(!$restaurant) {
            throw new \Exception('Ce restaurant n\'existe pas', 404);
        }
        $av = new \Modele\Avis();
        $avis = $av->getAvis($idRestaurant);
        return ['restaurant' => $restaurant, 'avis' => $avis];
    }
}