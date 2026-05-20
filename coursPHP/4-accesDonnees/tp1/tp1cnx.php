<?php
try {
    $chaineCnx = 'mysql:host=localhost;dbname=tp;charset=utf8mb4';
    $pdo = new PDO($chaineCnx, 'root', '');
} catch (PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' : ' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}
