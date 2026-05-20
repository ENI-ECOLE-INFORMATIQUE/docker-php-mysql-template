<?php
namespace Framework\Modele;

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
            if(!$config = parse_ini_file('Config/conf.ini', true))
                throw new \Exception('Erreur d\'accès au fichier de configuration Config/conf.ini');

            $this->cnx = new \PDO(
                $config['ConnexionBaseDeDonnees']['cnx'],
                $config['ConnexionBaseDeDonnees']['login'],
                $config['ConnexionBaseDeDonnees']['mdp'],
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
        }
        return $this->cnx;
    }
}