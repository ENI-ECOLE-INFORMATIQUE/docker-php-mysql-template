<?php
declare(strict_types=1);

abstract class Personnage {

    public function __construct(private string $nom) {
    }

    public abstract function blessure(float $points) : void;

    public function __toString() : string {
        return $this->nom;
    }
}