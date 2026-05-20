<?php
try {
    // chaine de connexion à la base de données
    $dsn = 'mysql:host=localhost;dbname=legumes;charset=utf8mb4';
    // création d'une instance de connexion à la base de données et ouverture de la connexion
    $pdo = new PDO($dsn, 'phpUser', 'NIMva2m95dRnLawt');
    // affichage d'un message en cas de succès
    echo 'Connexion effectuée avec le driver ' . $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) . '<br>';
} catch (PDOException $e) {
    // affichage d'un message en cas d'échec
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' : ' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}
