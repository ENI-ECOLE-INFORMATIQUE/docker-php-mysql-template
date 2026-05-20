<?php
$bool = false;
$serial = serialize($bool);
var_dump($serial);
var_dump(unserialize($serial));
