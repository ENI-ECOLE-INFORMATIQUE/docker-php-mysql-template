<?php
declare(strict_types=1);

require_once 'VilleCtr2.php';

class VilleCtrAvecRegion extends VilleCtr2 {
    
    public function __construct(string $nom, string $dept, private string $region) {
        parent::__construct($nom, $dept);
    }
    
    public function __toString() : string {
        $recup = parent::__toString();
        $recup = substr($recup, 0, strlen($recup) - 4);
        return  $recup . ' et dans la région ' .
                $this->region . '<br>';
    }
}
