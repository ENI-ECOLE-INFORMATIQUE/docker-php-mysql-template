<?php
require_once './spl_autoload_register/autoLoad.php';
// Appel à la classe Chaine -> la fonction chargementAuto réalise l'include de ../classes/Chaine.php au moment de l'instanciation.
$bidon = new Chaine('Je suis une chaine de caractères !');
echo 'instance Chaine créée : ' . $bidon->getX();
