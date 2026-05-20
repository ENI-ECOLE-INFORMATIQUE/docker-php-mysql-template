<?php
namespace Modele;

class Avis extends \Framework\Modele\ModeleDeDonnees {
    public function getAvis(int $idRestaurant) : iterable {
        $requete = 'SELECT auteur, note, commentaire FROM Avis WHERE idRestaurant=:idRestaurant;';
        return $this->executerRequete($requete, [':idRestaurant' => $idRestaurant])->fetchAll(\PDO::FETCH_NAMED);
    }
}