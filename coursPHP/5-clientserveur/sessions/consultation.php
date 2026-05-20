<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Consultation des informations de la session</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Consultation des informations de la session</h1>
        
        <h2>Récupération de la session</h2>
        <p>Pour récupérer la session, il faut à nouveau faire appel à la fonction
            <a href="https://www.php.net/manual/fr/function.session-start.php"><code>session_start()</code></a> avant d'écrire le moindre code HTML.</p>
        <code data-type="php"><?php highlight_file('sessionStart.php'); ?></code>
        <h2>La fonction <a href="https://www.php.net/manual/fr/function.session-id.php"><code>session_id()</code></a></h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['sessionId.php'], 'execution' => 'sessionId.php']);
        ?>
        <h2>La variable superglobale <code><a href="https://www.php.net/manual/fr/reserved.variables.session.php">$_SESSION</a></code></h2>
        <?php
        afficheCode(['fichiers' => ['dollarSession.php'], 'execution' => 'dollarSession.php']);
        ?>
        <h2>Consultation du cookie de session</h2>
        <?php
        afficheCode(['fichiers' => ['cookieSession.php'], 'execution' => 'cookieSession.php']);
        ?>
        <a href="suppression.php" class="executer">Suppression de la session</a>
    </body>
</html>