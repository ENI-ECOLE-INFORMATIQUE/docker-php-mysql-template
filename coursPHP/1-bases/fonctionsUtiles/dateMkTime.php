<?php
echo '<p><code>mktime(0, 0, 0, 1, 1, 1970)</code> = ' . mktime(0, 0, 0, 1, 1, 1970) . '</p>';

echo '<p>Création du timestamp pour le 26 juillet 2024 à 20h24<br>';
echo '<code>mktime(20, 24, 0, 7, 26, 2024)</code> = ' . mktime(20, 24, 0, 7, 26, 2024) . '</p>';

echo '<p><code>date("d/m/Y H:i:s", mktime(20, 24, 0, 7, 26, 2024))</code> = ' . date("d/m/Y H:i:s", mktime(20, 24, 0, 7, 26, 2024)) . '<br>';
echo 'Unix fêtera sa 2 milliardième seconde le ' . date("d/m/Y H:i:s", 2000000000) . '</p>';
echo '<p>Date du jour au format JJ/MM/AAAA : ' . date('d/m/Y') . '<p>';
