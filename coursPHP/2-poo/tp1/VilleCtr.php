<?php
declare(strict_types=1);

class VilleCtr {

    public function __construct(private string $nom, private string $departement) {
    }

    public function __toString() : string {
        return 'La ville ' . $this->nom . ' est dans le département ' . $this->departement . '<br>';
    }
}
