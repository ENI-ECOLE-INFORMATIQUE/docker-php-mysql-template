<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Suppression d'un cookie</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Suppression d'un cookie</h1>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['suppression.php'], 'execution' => 'suppression.php']);
        ?>
        <a href="utilisationCookie.php" class="precedent">Page lecture d'un cookie</a>
    </body>
</html>