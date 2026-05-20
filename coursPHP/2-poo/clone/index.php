<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Clonage d'une classe</title>     
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Clonage d'une classe</h1>
        
        <h2>Le problème avec la classe DateTime</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['date.php'], 'execution' => 'date.php', 'commentaires' => 'Il n\'existe qu\'une seul instance de la classe DateTime. La modification de l\'heure de fin modifie également l\'heure de début !']);
        ?>

        <h2>La solution en clonant l'instance</h2>
        <?php
        afficheCode(['fichiers' => ['dateClone.php'], 'execution' => 'dateClone.php']);
        ?>

        <h2 title="au-delà du programme">Plusieurs variables référençant la même instance</h2>
        <?php
        afficheCode(['fichiers' => ['../classes/ClasseACloner1.php', '../classes/ObjetCible.php', 'ref.php'], 'nomFichier' => true, 'execution' => 'ref.php']);
        ?>
        
        <h2 title="au-delà du programme">Clonage partiel de l'instance</h2>
        <?php
        afficheCode(['fichiers' => ['cp.php'], 'execution' => 'cp.php']);
        ?>

        <h2 title="au-delà du programme">Clonage avec utilisation de la méthode magique <a href="https://www.php.net/manual/fr/language.oop5.cloning.php#object.clone"><code>__clone()</code></a></h2>
        <?php
        afficheCode(['fichiers' => ['../classes/ClasseACloner2.php', 'mag.php'], 'nomFichier' => true, 'execution' => 'mag.php', 'commentaires' => 'La méthode magique <a href="https://www.php.net/manual/fr/language.oop5.cloning.php#object.clone"><code>__clone()</code></a> est appelée automatiquement lors de la création d\'un clone. Cela permet d\'une part d\'effectuer un clonage des attributs de type référence et d\'autre part de mettre à jour le nombre d\'instances créées.']);
        ?>
    </body>
</html>