<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PDO : L'externalisation de la chaîne de connexion</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1 title="au-delà du programme">PDO : L'externalisation de la chaîne de connexion</h1>
        <?php
        require '../../afficheCode.php';
        afficheCode(['fichiers' => ['config.ini', 'connexion.php'], 'nomFichier' => true, 'execution' => 'connexion.php']);
        ?>
    </body>
</html>
