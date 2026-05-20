<?php
$filtre = [
    'nom' => FILTER_SANITIZE_SPECIAL_CHARS,
    'age' => FILTER_VALIDATE_INT,
    'email' => FILTER_VALIDATE_EMAIL,
    'mdp' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options' => [
            'regexp' => '#^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$#'
        ]
    ],
    'notation' => FILTER_VALIDATE_INT // il n'a pas de champ de saisie 'notation' !
];

var_dump(filter_var_array($_POST, $filtre));
