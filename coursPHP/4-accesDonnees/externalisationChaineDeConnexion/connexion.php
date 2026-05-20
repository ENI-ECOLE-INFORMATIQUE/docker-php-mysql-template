<?php
try {
    if(!$config = parse_ini_file('config.ini', true))
        throw new Exception('Erreur d\'accès au fichier de configuration config.ini');
    
    $dsn = $config['baseDeDonnees']['driver'] .
           ':host=' . $config['baseDeDonnees']['hote'] .
           ';dbname=' . $config['baseDeDonnees']['base'] .
           ';charset=utf8mb4';
    $pdo = new PDO($dsn, $config['baseDeDonnees']['utilisateur'], $config['baseDeDonnees']['motDePasse']);

    $query = 'SELECT * FROM articles;';
    $stmt = $pdo->query($query);
    $arrAll = $stmt->fetchAll();
    for ($i = 0; $i < count($arrAll); $i++) {
        echo 'Article : ' . $arrAll[$i]['libelle'] . ' à ' . $arrAll[$i][2] . ' €<br>';
    }
} catch (PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' : ' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}
