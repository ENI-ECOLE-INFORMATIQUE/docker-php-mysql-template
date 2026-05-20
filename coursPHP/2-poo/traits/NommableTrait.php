<?php
declare(strict_types=1);

trait NommableTrait {
    private string $nom;

    public function getNom() : string {
        return $this->nom;
    }

    public function setNom(string $nom) : self {
        $this->nom = $nom;
        return $this;
    }
}