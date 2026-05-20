<?php
session_start();
// Détruit toutes les variables de session
$_SESSION = [];

header('Location: consultation.php');
