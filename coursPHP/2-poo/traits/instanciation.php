<?php
require_once 'Produit.php';

$achats = [new Produit('BTwin', 399), new Produit('Burley', 319.99)];

echo '<ul>';
foreach ($achats as $achat) {
    echo('<li>Produit n°' . $achat->getId() . ' : ' . $achat->getCode() .
         ' (' . number_format($achat->getPrix(), 2, '€', ' ') . ')</li>');
}
echo '</ul>';
