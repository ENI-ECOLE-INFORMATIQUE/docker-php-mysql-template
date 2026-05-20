<?php
declare(strict_types=1);

class Ville {
    private string $nom;
    private string $departement;
    
    public function setNom(string $nom) : self {
        $this->nom = $nom;
        return $this;
    }

    public function setDepartement(string $dept) : self {
        $this->departement = $dept;
        return $this;
    }

    public function __toString() : string {
        return 'La ville ' . $this->nom . ' est dans le département ' . $this->departement . '<br>';
    }
}
