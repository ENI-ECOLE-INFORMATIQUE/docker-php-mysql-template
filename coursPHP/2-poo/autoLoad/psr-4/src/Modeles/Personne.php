<?php
declare(strict_types=1);

namespace App\Modeles;

class Personne {

    public function __construct(private string $nom) {
    }

    public function __toString() {
        return 'Personne nommée ' . $this->nom;
    }
}
