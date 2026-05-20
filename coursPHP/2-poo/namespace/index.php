<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les namespaces</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Les namespaces</h1>
        <h2>Déclaration d'espaces de nom</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['monProjet/MaClasse.php', 'maLibrairieSpecifique/MaClasse.php'], 'nomFichier' => true]);
        ?>
        <h2>Utilisation de classes provenant de différents espaces de nom</h2>
        <?php
        afficheCode(['fichiers' => ['utilisation.php'], 'execution' => 'utilisation.php']);
        ?>
        <h2>Utilisation de use</h2>
        <?php
        afficheCode(['fichiers' => ['use.php'], 'execution' => 'use.php']);
        ?>
        <h2>Utilisation d'alias</h2>
        <?php
        afficheCode(['fichiers' => ['alias.php'], 'execution' => 'alias.php']);
        ?>
    </body>
</html>
