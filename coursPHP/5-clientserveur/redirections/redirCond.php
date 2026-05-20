<?php
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
if(!$nom) {
    header('Location: saisieNom.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les redirections</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Bonjour <?= $nom ?></h1>
        <h2>Code de la page :</h2><code data-type="php"><?php highlight_file(__FILE__); ?></code>
    </body>
</html>
