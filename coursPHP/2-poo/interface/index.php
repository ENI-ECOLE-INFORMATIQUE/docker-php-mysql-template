<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Interfaces</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Interfaces</h1>
        <h2>Définition de deux interfaces</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['../interfaces/Lecture.php', '../interfaces/Ecriture.php'], 'nomFichier' => true, 'commentaires' => 'Utilissation du mot clé <code>interface</code> pour définir une interface<br>']);
        ?>
        <h2>Définition d'une classe implémentant ces interfaces</h2>
        <?php
        afficheCode(['fichiers' => ['../classes/Valeur.php'], 'commentaires' => 'Utilisation du mot clé <code>implements</code> pour implémenter une ou plusieurs interfaces<br>']);
        ?>
        <h2>Utilisation de cette classe</h2>
        <?php
        afficheCode(['fichiers' => ['utilisation.php'], 'execution' => 'utilisation.php']);
        ?>
    </body>
</html>
