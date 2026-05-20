<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>La sérialisation</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1 title="au-delà du programme">La sérialisation</h1>

        <h2 title="au-delà du programme">Sérialisation d'éléments simples</h2>

        <h3>Entiers</h3>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['entiers.php'], 'execution' => 'entiers.php']);
        ?>

        <h3>Booléens</h3>
        <?php afficheCode(['fichiers' => ['booleens.php'], 'execution' => 'booleens.php']); ?>

        <h3>Réels</h3>
        <?php afficheCode(['fichiers' => ['reels.php'], 'execution' => 'reels.php']); ?>

        <h3>Chaines de caractères</h3>
        <?php afficheCode(['fichiers' => ['chaines.php'], 'execution' => 'chaines.php']); ?>

        <h2 title="au-delà du programme">Sérialisation d'éléments complexes</h2>

        <h3>Tableaux indexés</h3>
        <?php afficheCode(['fichiers' => ['ti.php'], 'execution' => 'ti.php']); ?>

        <h3>Tableaux associatifs</h3>
        <?php afficheCode(['fichiers' => ['ta.php'], 'execution' => 'ta.php']); ?>

        <h2 title="au-delà du programme">Sérialisation d'instances</h2>
        <h3>Classe simple</h3>
        <?php afficheCode(['fichiers' => ['cs.php'], 'execution' => 'cs.php']); ?>

        <h3>Classe complexe</h3>
        <?php afficheCode(['fichiers' => ['cc.php'], 'execution' => 'cc.php']); ?>

        <h3>Méthodes magiques associées à la sérialisation</h3>
        <?php afficheCode(['fichiers' => ['mm.php'], 'execution' => 'mm.php']); ?>
    </body>
</html>
