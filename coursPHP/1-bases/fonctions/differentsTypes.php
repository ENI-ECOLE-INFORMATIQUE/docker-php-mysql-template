<?php
declare(strict_types=1);

function additionIntOuFloat(int|float $valeur1, int|float $valeur2) : int|float {
    return $valeur1 + $valeur2;
}

$a=1;
$b=2;
$c=3.14;

var_dump(additionIntOuFloat($a, $b));
var_dump(additionIntOuFloat($a, $c));
