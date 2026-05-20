<?php
declare(strict_types=1);

trait CaracteristiqueTrait {
    private string $nom;
    private int $valeur;

    public function getNom() : string {
        return $this->nom;
    }

    public function setNom(string $nom) : self {
        $this->nom = mb_strtoupper($nom);
        return $this;
    }

    public function getValeur() : int {
        return $this->getValeur();
    }

    public function setValeur(int $valeur) : self {
        $this->valeur = $valeur;
        return $this;
    }
}