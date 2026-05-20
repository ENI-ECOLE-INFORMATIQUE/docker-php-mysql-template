<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les boucles</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Les boucles</h1>

        <h2>La boucle <code>while</code></h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['while.php'], 'execution' => 'while.php']);
        ?>

        <h2>La boucle <code>do while</code></h2>
        <?php afficheCode(['fichiers' => ['do.php'], 'execution' => 'do.php']); ?>

        <h2>La boucle <code>for</code></h2>
        <?php afficheCode(['fichiers' => ['for.php'], 'execution' => 'for.php']); ?>

        <h2>La boucle <code>foreach</code></h2>
        <?php afficheCode(['fichiers' => ['foreach.php'], 'execution' => 'foreach.php']); ?>
    </body>
</html>
