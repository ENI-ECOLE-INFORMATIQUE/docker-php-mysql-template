<?php
declare(strict_types=1);

define('QUATRE', 4);

function produit(float $valeur1 = QUATRE, float $valeur2 = 2) : float {
    return $valeur1 * $valeur2;
}

echo '<p><code>produit(5, 3)</code> : 5 × 3 = ' . produit(5, 3) . '<br>';
echo '<code>produit(5)</code> : 5 × 2 = ' . produit(5) . '<br>';
echo '<code>produit()</code> : 4 × 2 = ' . produit() . '</p>';
