<?php
declare(strict_types=1);

require_once '../classes/Animal.php';

class Carnivore extends Animal {

    public function mange() : void {
        echo 'je mange de la viande.<br>';
    }
}
