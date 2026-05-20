<?php
$chaine = 'accentuées';
echo '<p>Compte du nombre de caractères pour le texte "'.$chaine.'" :<br>';
echo 'strlen : '.strlen($chaine).' caractères<br>';
echo 'mb_strlen : '.mb_strlen($chaine).' caractères</p>';
