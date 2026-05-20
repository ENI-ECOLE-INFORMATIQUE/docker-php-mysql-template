<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les Fonctions</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Les Fonctions</h1>

        <h2>Création d'une fonction</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['somme.php'], 'nomFichier' => true, 'commentaires' => '<code>strict_types=1</code> indique qu\'aucune conversion implicite entre type scalaire n\'est autorisée en dehors d\'un entier où une valeur réelle est attendue']);
        ?>

        <h2>Appel d'une fonction</h2>
        <?php afficheCode(['fichiers' => ['appelSomme.php'], 'execution' => 'appelSomme.php']) ?>

        <h2>Passage de paramètres</h2>
        <h3>Passage par valeur</h3>
        <?php afficheCode(['fichiers' => ['passageParValeur.php'], 'execution' => 'passageParValeur.php']) ?>
        <h3>Passage par référence</h3>
        <?php afficheCode(['fichiers' => ['passageParReference.php'], 'execution' => 'passageParReference.php']) ?>

        <h2>Valeur par défaut</h2>
        <?php afficheCode(['fichiers' => ['valeurParDefaut.php'], 'execution' => 'valeurParDefaut.php']) ?>

        <h2>Typage avec une union de types</h2>
        <?php afficheCode(['fichiers' => ['differentsTypes.php'], 'execution' => 'differentsTypes.php']); ?><br>
        <?php afficheCode(['fichiers' => ['mixed.php'], 'execution' => 'mixed.php', 'commentaires' => '<code>mixed</code> accepte toutes les valeurs. Il est équivalent au type union <code>objet|ressource|array|string|float|int|bool|null</code>']); ?>

        <h2>Fonction non typée</h2>
        <?php afficheCode(['fichiers' => ['fonctionNonTypee.php'], 'execution' => 'fonctionNonTypee.php']); ?>

        <h2>strict_types</h2>
        <?php afficheCode(['fichiers' => ['fonctionStrict0.php'], 'execution' => 'fonctionStrict0.php']); ?><br>
        <?php afficheCode(['fichiers' => ['fonctionStrict1.php'], 'execution' => 'fonctionStrict1.php']); ?>

        <h2>Variable statique</h2>
        <?php afficheCode(['fichiers' => ['variableStatique.php'], 'execution' => 'variableStatique.php']) ?>

        <h2 title="au-delà du programme">Fonction variable</h2>
        <?php afficheCode(['fichiers' => ['fonctionVariable.php'], 'execution' => 'fonctionVariable.php']) ?>

        <h2>Passage d'une fonction en paramètre</h2>
        <?php afficheCode(['fichiers' => ['passageFctEnParam.php'], 'execution' => 'passageFctEnParam.php']) ?>

        <h2>Fonction anonyme</h2>
        <?php afficheCode(['fichiers' => ['fonctionAnonyme.php'], 'execution' => 'fonctionAnonyme.php']) ?>

        <h2>Utilisation d'une variable globale</h2>
        <?php
        $fichiers = ['variableGlobale.php'];
        $execution = 'variableGlobale.php';
        require '../../afficheCode2.php';
        ?>
    </body>
</html>
