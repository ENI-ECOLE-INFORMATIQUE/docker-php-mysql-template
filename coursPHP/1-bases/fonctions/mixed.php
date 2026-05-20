<?php
declare(strict_types=1);

function remplaceSiFaux(mixed $donnees, mixed $remplacement) : mixed {
    if($donnees == false)
        return $remplacement;
    else
        return $donnees;
}

$a = [];
var_dump(remplaceSiFaux($a, "rien"));