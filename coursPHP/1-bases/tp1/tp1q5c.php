<?php
$x = "PHP8";
echo '<p><code>$x</code> :</p>';
var_dump($x);
$a = &$x;
echo '<p><code>$a</code> :</p>';
var_dump($a);
$y = " 8 eme version de PHP";
echo '<p><code>$y</code> :</p>';
var_dump($y);
$z = settype($y, 'int') * 10;
echo '<p><code>$z</code> :</p>';
var_dump($z);
$x = settype($y, 'int') * settype($y, 'int');
echo '<p><code>$x</code> :</p>';
var_dump($x);
echo '<p><code>$a</code> :</p>';
var_dump($a);
