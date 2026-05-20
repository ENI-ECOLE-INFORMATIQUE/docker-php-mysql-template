<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Inclusion de fichier</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Inclusion de fichiers</h1>
        <h2><code>include</code></h2>
        <h3><code>include</code> d'un fichier qui existe</h3>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['identite.php', 'include.php'], 'nomFichier' => true, 'execution' => 'include.php']);
        ?>
        <h3><code>include</code> d'un fichier qui n'existe pas</h3>
        <?php
        afficheCode(['fichiers' => ['include2.php'], 'nomFichier' => true, 'execution' => 'include2.php']);
        ?>
        <h2><code>require</code></h2>
        <h3><code>require</code> d'un fichier qui existe</h3>
        <?php
        afficheCode(['fichiers' => ['identite.php', 'require.php'], 'nomFichier' => true, 'execution' => 'require.php']);
        ?>
        <h3><code>require</code> d'un fichier qui n'existe pas</h3>
        <?php
        afficheCode(['fichiers' => ['require2.php'], 'nomFichier' => true, /*'execution' => 'require2.php',*/ 'commentaires' => 'L\'exécution provoque une erreur fatale !']);
        ?>
        <h2><code>require_once</code> et <code>include_once</code></h2>
        <h3><code>require</code> plusieurs fois le même fichier</h3>
        <?php
        afficheCode(['fichiers' => ['identiteConst.php', 'require3.php'], 'nomFichier' => true, 'execution' => 'require3.php']);
        ?>
        <h3><code>require_once</code> plusieurs fois le même fichier</h3>
        <?php
        afficheCode(['fichiers' => ['identiteConst.php', 'require_once.php'], 'nomFichier' => true, 'execution' => 'require_once.php']);
        ?>
    </body>
</html>
