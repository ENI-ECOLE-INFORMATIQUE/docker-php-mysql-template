<?php
require_once 'Controleur/controleur.php';

try {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if(!isset($action)||!$action) {
        accueil();
    } elseif($action == 'restaurant') {
        restaurant();
    } else {
        throw new Exception('Action inexistante', 404);
    }
} catch(PDOException $e) {
    $msgErreur = 'L\'accès aux données a échoué : ' . $e->getMessage();
    require 'Vue/vueErreur.php';
} catch(Exception $e) {
    switch($e->getCode()) {
        case 400 : header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request'); break;
        case 404 : header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found'); break;
    }
    $msgErreur = $e->getMessage();
    require 'Vue/vueErreur.php';
}