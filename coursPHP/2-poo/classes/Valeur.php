<?php
declare(strict_types=1);

require_once '../interfaces/Lecture.php';
require_once '../interfaces/Ecriture.php';

class Valeur implements Lecture, Ecriture {

    private mixed $val;

    // Implémentation de la méthode de Lecture.
    public function get() : mixed {
        return $this->val;
    }

    // Implémentation de la méthode d'Ecriture.
    public function put(mixed $valeur) : void {
        $this->val = $valeur;
    }
}
