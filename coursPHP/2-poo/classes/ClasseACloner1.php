<?php
declare(strict_types=1);

class ClasseACloner1 {
    private string $attribut;
    private static int $instances = 0;
    private ObjetCible $inst;

    public function __construct() {
        static::$instances++;
        $this->attribut = 'test';
        $this->inst = new ObjetCible();
    }

    public function __destruct() {
        static::$instances--;
        echo '<div><em>Suppression d\'une instance de ' . __CLASS__ . '</em></div>';
    }

    public static function afficheNbInstances() : void {
        echo 'il y a ' . static::$instances . ' instance' . (static::$instances > 1 ? 's' : '') . ' de la classe ' . __CLASS__ . '<br>';
    }

    public function setAttribut(string $valeur) : self {
        $this->attribut = $valeur;
        return $this;
    }

    public function setValInstance(int $v) : self {
        $this->inst->setVal($v);
        return $this;
    }
}
