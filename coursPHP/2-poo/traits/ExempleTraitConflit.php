<?php
declare(strict_types=1);

require_once 'NommableTrait.php';
require_once 'CaracteristiqueTrait.php';

class ExempleTraitConflit {
    use NommableTrait, CaracteristiqueTrait {
        NommableTrait::getNom insteadof CaracteristiqueTrait;
        NommableTrait::setNom insteadof CaracteristiqueTrait;
    }
}
