<?php
declare(strict_types=1);

class VilleCtr2 {
    
    protected static string $nomLePlusLong;

    public function __construct(private string $nom, private string $departement) {
        if(!isset(static::$nomLePlusLong) || strlen($nom)>strlen(static::$nomLePlusLong))
            static::$nomLePlusLong = $nom;
    }

    public function __toString() : string {
        return 'La ville ' . $this->nom . ' est dans le département ' . $this->departement . '<br>';
    }

    public static function getNomLePlusLong() : string {
        return static::$nomLePlusLong;
    }
}
