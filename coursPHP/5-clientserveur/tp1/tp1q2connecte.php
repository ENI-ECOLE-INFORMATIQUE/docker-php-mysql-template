<?php
session_start();
if(!isset($_SESSION['nom'])) {
    header('location:tp1q2c.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 1 question 2</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>TP 1 : Échange client-serveur</h1>
        <h2>Bonjour <?=$_SESSION['nom']?> !</h2>
    </body>
</html>