<?php
declare(strict_types=1);

function resteDivisionEntiereSt(int $dividende, int $diviseur): int {
    var_dump($dividende);
    return $dividende % $diviseur;
}

echo '<p><code>resteDivisionEntiere(17, 5)</code> = ' . resteDivisionEntiereSt(17, 5).'</p>';

// il effectue une conversion implicite vers un nombre entier (donc erreur fatale en strict_type=1)
//echo '<p><code>resteDivisionEntiere(\'17\', 5)</code> = ' . resteDivisionEntiere('17', 5).'</p>';

// erreur car l'argument passé n'est pas du bon type (la conversion implicite ne fonctionne pas)
//echo '<p><code>resteDivisionEntiere(\'a\', 5)</code> = '.resteDivisionEntiere('a', 5).'</p>';
