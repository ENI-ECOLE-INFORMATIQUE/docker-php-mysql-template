<?php
require_once './monProjet/MaClasse.php';
require_once './maLibrairieSpecifique/MaClasse.php';

// Déclaration d'une instance ma classe "maClasse" se trouvant dans le namespace MonProjet
$objProjet = new monProjet\MaClasse();
echo $objProjet->mafonction();
// Déclaration d'une instance ma classe "maClasse" se trouvant dans le namespace maLibrairieSpecifique
$objMaLivrairie = new maLibrairieSpecifique\MaClasse();
echo $objMaLivrairie->mafonction();
