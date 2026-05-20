<?php
$float = 3.14159265359;
$serial = serialize($float);
var_dump($serial);
var_dump(unserialize($serial));
