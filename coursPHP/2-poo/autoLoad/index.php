<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Chargement automatique des classes</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Chargement automatique des classes</h1>
        <h2>Avant Psr-4</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['spl_autoload_register/autoLoad.php', 'spl_autoload_register/../../classes/Chaine.php', 'spl_autoload_register/utilisation.php'], 'nomFichier' => true, 'execution' => 'spl_autoload_register/utilisation.php', 'commentaires' => 'la méthode <a href="https://www.php.net/manual/fr/function.spl-autoload-register.php"><code>spl_autoload_register()</code></a> permet d\'enregistrer la méthode à appeler automatiquement lorsqu\'une classe non chargée en mémoire est utilisée.', 'trunc' => 22]);
        ?>
        <h2>Avec Psr-4</h2>
        <?php
        afficheCode(['fichiers' => ['psr-4/composer.json', 'psr-4/src/Modeles/Personne.php', 'psr-4/utilisation.php'], 'nomFichier' => true, 'execution' => 'psr-4/utilisation.php', 'commentaires' => 'Pour mettre en place l\'autoload avec Psr-4, il faut réaliser les étapes suivantes :<ol><li>Installation de <a href="https://getcomposer.org/download/">Composer</a>.</li><li>Création du fichier composer.json avec une section "autoload" contenant une section "psr-4", dans laquelle est définie d\'une part le préfixe de l\'espace de nom (App\) et le repertoire racine associé (src/).</li><li>Génération des fichiers d\'autoload avec la commande <code>composer dumpautoload</code> dans une console positionnée dans le répertoire contenant le fichier composer.json.</li><li>Définition des classes en utilisant l\'espace de nom reprenant le sufixe suivi de l\'arborescence des dossiers pour accéder à la classe.</li><li>L\'utilisation de l\'autoload en faisant appel à <code>require_once \'vendor/autoload.php\'; </code></li></ol>', 'trunc' => 6]);
        ?>
    </body>
</html>