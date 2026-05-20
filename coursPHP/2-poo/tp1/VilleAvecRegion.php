<?php
declare(strict_types=1);

require_once 'Ville.php';

class VilleAvecRegion extends VilleCtr {

    public function __construct(string $nom, string $dept, private string $region) {
        parent::__construct($nom, $dept);
    }

    public function __toString() : string {
        $recup = parent::__toString();
        $recup = substr($recup, 0, strlen($recup) - 4);
        return  $recup . ' de la région ' .
            $this->region . '<br>';
    }
}
