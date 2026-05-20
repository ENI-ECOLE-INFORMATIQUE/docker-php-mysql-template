<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les redirections</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Les redirections</h1>

        <h2>Redirection vers un chemin relatif</h2>
        <code data-type="php"><?php highlight_file('redir.php'); ?></code>
        <a href="redir.php" class="executer">Exécuter</a>

        <h2>Redirection vers un chemin absolu</h2>
        <code data-type="php"><?php highlight_file('redirAbs.php'); ?></code>
        <a href="redirAbs.php" class="executer">Exécuter</a>

        <h2>Redirection vers un autre site web</h2>
        <code data-type="php"><?php highlight_file('redirExt.php'); ?></code>
        <a href="redirExt.php" class="executer">Exécuter</a>

        <h2>Redirection permanente</h2>
        <code data-type="php"><?php highlight_file('redirPerm.php'); ?></code>
        <a href="redirPerm.php" class="executer">Exécuter</a>

        <h2>Redirection conditionnelle</h2>
        <code data-type="php"><?php highlight_file('redirCond.php'); ?></code>
        <a href="redirCond.php" class="executer">Exécuter</a>
    </body>
</html>