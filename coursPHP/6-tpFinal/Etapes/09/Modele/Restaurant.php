<?php
require_once 'ModeleDeDonnees.php';

class Restaurant extends ModeleDeDonnees {
    public function getRestaurants() : iterable {
        $requete = 'SELECT idRestaurant, nom, ville, description FROM Restaurants;';
        return $this->executerRequete($requete)->fetchAll(PDO::FETCH_NAMED);
    }
    
    public function getRestaurant(int $idRestaurant) : array|bool {
        $requete = 'SELECT nom, adresse, cp, ville, telephone, description FROM Restaurants WHERE idRestaurant=:idRestaurant;';
        return $this->executerRequete($requete, [':idRestaurant' => $idRestaurant])->fetch(PDO::FETCH_NAMED);
    }
}