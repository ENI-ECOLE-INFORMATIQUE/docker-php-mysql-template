<?php
$entier = 7;
$serial = serialize($entier);
var_dump($serial);
var_dump(unserialize($serial));
