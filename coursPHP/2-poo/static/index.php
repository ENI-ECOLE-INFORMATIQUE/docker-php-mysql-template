<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Attributs et méthodes de classe</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Attributs et méthodes de classe</h1>
        <h2>Définition de ces éléments avec le mot clé <code>static</code></h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['../classes/UtilisateurAvecMatricule.php'], 'commentaires' => 'Le mot clé <code>static</code> est utilisé pour définir un attribut ou une méthode de classe<br><code>static::</code> permet d\'accéder aux attributs et méthodes de classe']);
        ?>
        <h2>Utilisation de la classe</h2>
        <?php afficheCode(['fichiers' => ['utilisation.php'], 'execution' => 'utilisation.php', 'commentaires' => 'Depuis l\'exterieur d\'une classe, il faut utiliser le nom de la classe suivie de l\'opérataur de résolution de portée (<code>::</code>) suivi de l\'élément de classe.']); ?>
    </body>
</html>
