<?php
declare(strict_types=1);

require_once 'Personne.php';

class Client extends Personne {

    private string $adresse;

    public function setCoord(string $adresse) : self {
        $this->adresse = $adresse;
        return $this;
    }

    public function __toString() : string {
        return '<address>' . $this->nom . ' ' . $this->prenom . '<br>' . $this->adresse . '</address>';
    }
}
