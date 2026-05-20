<?php
declare(strict_types=1);

require_once '../classes/Animal.php';

class Vegetarien extends Animal {

    public function mange() : void {
        echo 'je mange des fruits et des légumes.<br>';
    }
}
