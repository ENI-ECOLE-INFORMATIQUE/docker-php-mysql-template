<?php
$array = array('truc' => 'machin', 'chose' => 8, 9 => 'yeah !');
$serial = serialize($array);
var_dump($serial);
var_dump(unserialize($serial));
