<?php
declare(strict_types=1);

require_once 'Personnage.php';
require_once 'KameHameHaTrait.php';

class Cyborg extends Personnage {

    use KameHameHaTrait;

    public function __construct(string $nom, private float $pointDeVie, $puissance) {
        parent::__construct($nom);
        $this->puissance = $puissance;
    }

    public function blessure(float $points) : void {
        $this->pointDeVie -= $points*rand(0, 1);
        if($this->pointDeVie<=0)
            throw new Exception($this . ' meurt !', 2);
    }
}