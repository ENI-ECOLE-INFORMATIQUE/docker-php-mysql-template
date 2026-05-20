<?php
namespace Modele;

abstract class ModeleDeDonnees {
    private ?\PDO $cnx = null;

    protected function executerRequete(string $sql, array|null $parametres=null) : \PDOStatement {
        if ($parametres == null) {
            // requete sans paramètre
            $resultats = $this->getConnexion()->query($sql);
        } else {
            // requete avec paramètres
            $resultats = $this->getConnexion()->prepare($sql);
            $resultats->execute($parametres);
        }
        return $resultats;
    }

    private function getConnexion() : \PDO {
        if($this->cnx == null) {
            $chaineCnx = 'mysql:host=localhost;dbname=Restaurants';
            $this->cnx = new \PDO($chaineCnx, 'webUser', '19L_lS9Dl(Hr8Yyl', [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
        }
        return $this->cnx;
    }
}