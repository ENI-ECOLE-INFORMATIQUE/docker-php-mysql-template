<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>AJAX</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>AJAX : Asynchronous JAvascript and Xml</h1>
        <h2>Version texte</h2>
        <h3>Une page php qui sera appelée de manière asynchrone</h3>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['txt/getVilles.php']]);
        ?>
        <h4>Appel à la page <code>getVilles.php</code></h4>
        <a href="txt/getVilles.php?cp=67110" class="executer">Appel à getVilles.php?cp=67110</a><br>
        <a href="txt/getVilles.php?cp=67400" class="executer">Appel à getVilles.php?cp=67400</a>
        <h3>L'appel asynchrone avec JavaScript</h3>
        <p>Maintenant que nous avons côté serveur une page qui nous fournit dynamiquement les villes ayant ce code postal,
            du côté du client un appel asynchrone est mis en place avec du code JavaScript pour y faire appel.</p>
        <?php
        afficheCode(['fichiers' => ['txt/formulaire.php', 'txt/villesParCp.js'], 'nomFichier' => true, 'execution' => 'txt/formulaire.php']);
        ?>
        <h2>Version JSON</h2>
        <h3>Une page php qui sera appelée de manière asynchrone</h3>
        <?php
        afficheCode(['fichiers' => ['json/getVilles.php']]);
        ?>
        <h4>Appel à la page <code>getVilles.php</code></h4>
        <a href="json/getVilles.php?cp=67110" class="executer">Appel à getVilles.php?cp=67110</a><br>
        <a href="json/getVilles.php?cp=67400" class="executer">Appel à getVilles.php?cp=67400</a>
        <h3>L'appel asynchrone avec JavaScript</h3>
        <p>Maintenant que nous avons côté serveur une page qui nous fournit dynamiquement les villes ayant ce code postal,
            du côté du client un appel asynchrone est mis en place avec du code JavaScript pour y faire appel.</p>
        <?php
        afficheCode(['fichiers' => ['json/formulaire.php', 'json/villesParCp.js'], 'nomFichier' => true, 'execution' => 'json/formulaire.php']);
        ?>
    </body>
</html>
