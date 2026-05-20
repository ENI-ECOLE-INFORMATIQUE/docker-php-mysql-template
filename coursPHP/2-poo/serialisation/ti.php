<?php
$array = array(0, 4, 7, 3);
$serial = serialize($array);
var_dump($serial);
var_dump(unserialize($serial));
