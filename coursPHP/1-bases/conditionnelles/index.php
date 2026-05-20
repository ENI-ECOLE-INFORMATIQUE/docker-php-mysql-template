<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les conditionnelles</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Les conditionnelles</h1>

        <h2>La structure de contrôle <code>if</code></h2>
        <h3>Cas simple</h3>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['if.php'], 'execution' => 'if.php']);
        ?>

        <h3><code>if else</code></h3>
        <?php afficheCode(['fichiers' => ['else.php'], 'execution' => 'else.php']); ?>

        <h3><code>if elseif else</code></h3>
        <?php afficheCode(['fichiers' => ['elseif.php'], 'execution' => 'elseif.php']); ?>

        <h2>L'opérateur ternaire <code>? :</code></h2>
        <?php afficheCode(['fichiers' => ['ternaire.php'], 'execution' => 'ternaire.php']); ?>

        <h2>La structure de contrôle <code>switch</code></h2>
        <h3>Cas simple</h3>
        <?php afficheCode(['fichiers' => ['switch.php'], 'execution' => 'switch.php']); ?>

        <h3>Plusieurs cas ensemble</h3>
        <?php afficheCode(['fichiers' => ['switch2.php'], 'execution' => 'switch2.php']); ?>

        <h2>L'expression <code>match</code></h2>
        <?php afficheCode(['fichiers' => ['match.php'], 'execution' => 'match.php']); ?>
    </body>
</html>
