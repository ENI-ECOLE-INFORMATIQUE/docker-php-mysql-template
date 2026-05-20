<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Suppression de la session</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Suppression de la session</h1>
        
        <h2>Suppression des variables de la session</h2>
        <code data-type="php"><?php highlight_file('suppVar.php'); ?></code>
        <a href="suppVar.php" class="executer">Exécuter</a>
        
        <h2>Suppression du cookie de la session</h2>
        <code data-type="php"><?php highlight_file('suppCookie.php'); ?></code>
        <a href="suppCookie.php" class="executer">Exécuter</a>
        
        <h2>Suppression de la session</h2>
        <code data-type="php"><?php highlight_file('suppSession.php'); ?></code>
        <a href="suppSession.php" class="executer">Exécuter</a><br>
        <a href="consultation.php" class="precedent">Consultation de la session</a>
    </body>
</html>