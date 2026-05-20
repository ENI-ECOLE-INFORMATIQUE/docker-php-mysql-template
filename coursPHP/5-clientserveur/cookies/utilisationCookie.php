<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Consultation de la valeur d'un cookie</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Consultation de la valeur d'un cookie</h1>
        <h2>La variable superglobale <code><a href="https://www.php.net/manual/fr/reserved.variables.cookies.php">$_COOKIE</a></code></h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['dollarCookie.php'], 'execution' => 'dollarCookie.php']);
        ?>
        <h2>La fonction <a href="https://www.php.net/manual/fr/function.filter-input.php"><code>filter_input</code></a></h2>
        <?php
        afficheCode(['fichiers' => ['filterInput.php'], 'execution' => 'filterInput.php']);
        ?>
        <a href="index.php" class="precedent">Page de création des cookies</a> <a href="suppressionCookie.php" class="executer">Page suppression d'un cookie</a>
    </body>
</html>