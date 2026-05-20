<?php
function operation(float $valeur1, float $valeur2, string|Closure $fonction) : float|string {
    if (is_string($fonction) && !function_exists($fonction)) {
        $retour = 'La fonction "' . $fonction . '" n\'existe pas !';
    } else {
        $retour = $fonction($valeur1, $valeur2);
    }
    return $retour;
}

echo 'Multiplication 5 × 8 = ' . operation(5, 8, 'produit') . '<br>';
echo 'Somme 5 + 8 = ' . operation(5, 8, 'somme') . '<br>';
echo 'Division 5 / 8 = ' . operation(5, 8, 'division'), '<br>';
