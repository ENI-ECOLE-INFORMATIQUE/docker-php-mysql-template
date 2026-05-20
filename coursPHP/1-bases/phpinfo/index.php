<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>phpinfo()</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>La fonction <a href="https://www.php.net/manual/fr/function.phpinfo.php"><code>phpinfo()</code></a></h1>
        <?php
        require '../../afficheCode.php';
        afficheCode(['fichiers' => ['phpinfo.php'], 'execution' => 'phpinfo.php', 'iframe' => true]);
        ?>
    </body>
</html>