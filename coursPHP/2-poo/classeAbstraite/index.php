<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Classes abstraites</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Classes abstraites</h1>
        <h2>Définition de méthodes et de classes abstraites</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['../classes/Animal.php', '../classes/Vegetarien.php', '../classes/Carnivore.php'], 'nomFichier' => true, 'execution' => false, 'commentaires' => 'Utilissation du mot clé <code>abstract</code> pour définir une classe ou une méthode abstraite<br>']);
        ?>

        <h2>Utilisation</h2>
        <?php
        afficheCode(['fichiers' => ['utilisation.php'], 'execution' => 'utilisation.php']);
        ?>
    </body>
</html>