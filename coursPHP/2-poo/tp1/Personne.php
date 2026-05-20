<?php
declare(strict_types=1);

abstract class Personne {
    
    public function __construct(protected string $nom, protected string $prenom) {
    }
}
