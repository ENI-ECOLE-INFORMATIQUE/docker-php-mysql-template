<?php
$filtrePersonne = [
    'nom' => FILTER_SANITIZE_SPECIAL_CHARS,
    'age' => FILTER_VALIDATE_INT
];
$filtreCompte = [
    'email' => FILTER_VALIDATE_EMAIL,
    'mdp' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options' => [
            'regexp' => '#^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$#'
        ]
    ]
];

var_dump(filter_var_array($_POST['personne'], $filtrePersonne));
var_dump(filter_var_array($_POST['compte'], $filtreCompte));
