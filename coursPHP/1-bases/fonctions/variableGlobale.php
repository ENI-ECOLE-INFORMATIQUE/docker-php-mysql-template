<?php

$a = 67600;

function utilVarGlobale() {
    global $a;
    echo 'valeur de variable globale a : ' . $a . '<br>';
    $GLOBALS['b'] = 'test';
}

utilVarGlobale();
echo 'valeur de variable globale b : ' . $b;
