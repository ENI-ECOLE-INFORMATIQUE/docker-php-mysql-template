<?php
var_dump($uneVariable);
echo '<p>isset() : La variable <code>$uneVariable</code> est elle définie ? <p>';
var_dump(isset($uneVariable));
echo '<p>empty() : La variable <code>$uneVariable</code> est elle vide ?</p>';
var_dump(empty($uneVariable));
echo '<p>unset() Suppression de la variable <code>$uneVariable</code><br>';
unset($uneVariable);
echo 'La variable <code>$uneVariable</code> est elle définie ? </p>';
var_dump(isset($uneVariable));
