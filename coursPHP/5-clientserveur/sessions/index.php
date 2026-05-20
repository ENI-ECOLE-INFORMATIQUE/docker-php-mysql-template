<?php
// Création de la session si elle n'a pas encore été créée ou récupération de celle existante
session_start();
// Enregistrer deux informations dans la session.
$_SESSION['nom'] = 'Shannon';
$_SESSION['prenoms'] = ['Claude', 'Elwood']; //tableau
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Création d'une session</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Création d'une session</h1>
        <h2>Code de la page :</h2><code data-type="php"><?php ini_set('highlight.comment', '#7D784D');highlight_file(__FILE__); ?></code>
        <a href="consultation.php" class="executer">Consultation des informations de la session</a>
    </body>
</html>