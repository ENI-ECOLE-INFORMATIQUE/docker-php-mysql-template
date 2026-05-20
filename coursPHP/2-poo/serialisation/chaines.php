<?php
$chaine = 'Frédéric dit : "j\'ai faim !"';
$serial = serialize($chaine);
var_dump($serial);
var_dump(unserialize($serial));
