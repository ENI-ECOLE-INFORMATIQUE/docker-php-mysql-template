<?php
declare(strict_types=1);

// fonction qui réalise l'inclusion du fichier correspondant
// au nom de la classe
function chargementAutomatique(string $nomClasse) : void {
    require_once '../../2-poo/classes/' . $nomClasse . '.php';
}

// Enregistrer la fonction comme fonction d'autochargement.
// PHP l'appellera si on fait appel à une classe qui n'est pas
// incluse.
spl_autoload_register('chargementAutomatique');
