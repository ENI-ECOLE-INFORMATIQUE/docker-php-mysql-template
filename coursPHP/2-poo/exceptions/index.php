<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exceptions</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Exceptions</h1>
        <h2>Levée d'une exception</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['../classes/Distance.php'], 'commentaires' => 'Le mot clé <code>throw</code> permet de lever une exception.']);
        ?>

        <h2>Appel d'une méthode susceptible de lever une exception</h2>
        <?php
        afficheCode(['fichiers' => ['sansTry.php'], 'execution' => 'sansTry.php']);
        ?>

        <h2>Le bloc <code>try ... catch ... finally</code></h2>
        <?php
        afficheCode(['fichiers' => ['utilisation.php'], 'execution' => 'utilisation.php', 'commentaires' => 'Le PHP utilise le mécanisme de traitement des exceptions avec les blocs <code>try ... catch</code> et éventuellement <code>finally</code>.']);
        ?>
    </body>
</html>
