<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Fonctions utiles</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Fonctions utiles</h1>

        <h2>Changements de casse</h2>
        <h3>Sans prise en compte des accents et des cédilles</h3>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['changementCasse.php'], 'execution' => 'changementCasse.php', 'commentaires' => 'Attention <code>ucwords()</code> ne passe pas le reste en minuscules !<br>Remarquez également que les lettres accentées ne sont pas passées en majuscules.']);
        ?>

        <h3>Avec prise en compte des accents et des cédilles</h3>
        <?php
        afficheCode(['fichiers' => ['changementCasse2.php'], 'execution' => 'changementCasse2.php', 'commentaires' => 'Les fonctions préfixées par mb_ permettent de choisir l\'encodage des caractères. En utilisant l\'unicode, cela permet de gérer tous les caractères y compris les caractères accentués et les cédilles.']);
        ?>

        <h2>Longueur d'une chaîne de caractères</h2>
        <?php
        afficheCode(['fichiers' => ['longueurChaine.php'], 'execution' => 'longueurChaine.php']);
        ?>

        <h2>Mise en forme de numériques</h2>
        <h3>Mise en forme avec <a href="https://www.php.net/manual/fr/function.sprintf.php"><code>sprintf()</code></a></h3>
        <?php
        afficheCode(['fichiers' => ['miseEnFormeDeNumeriques.php'], 'execution' => 'miseEnFormeDeNumeriques.php'])
        ?>

        <h3>Mise en forme avec <a href="https://www.php.net/manual/fr/function.number-format.php"><code>number_format()</code></a></h3>
            <?php
        afficheCode(['fichiers' => ['miseEnFormeDeNumeriques2.php'], 'execution' => 'miseEnFormeDeNumeriques2.php', 'commentaires' => 'Vous remarquerez que la fonction <a href="https://www.php.net/manual/fr/function.number-format.php"><code>number_format()</code></a> effectue les arrondis au plus proche'])
        ?>

        <h2>Recherche dans une chaine de caractères avec <a href="https://www.php.net/manual/fr/function.strpos.php"><code>strpos()</code></a></h2>
        <h3>Occurrence trouvée</h3>
        <?php afficheCode(['fichiers' => ['rechercheDansUneChaineAt.php'], 'execution' => 'rechercheDansUneChaineAt.php']); ?>
        <h3>Occurrence trouvée en première position</h3>
        <?php afficheCode(['fichiers' => ['rechercheDansUneChaineH.php'], 'execution' => 'rechercheDansUneChaineH.php', 'commentaires' => 'Vous remarquerez que le test utilise le triple égal et non le double égal car avec n\'oubliez pas que zéro est équivalent à <code>false</code>']); ?>
        <h3>Occurrence non trouvée</h3>
        <?php afficheCode(['fichiers' => ['rechercheDansUneChaineW.php'], 'execution' => 'rechercheDansUneChaineW.php', 'commentaires' => 'Ce qui peut paraitre surprenant c\'est que la fonction retourne le booléen <code>false</code> dans ce cas là alors que dans les autre cas, la fonction retournait un entier... La fonction renvoie en fait un type <a href="https://www.php.net/manual/fr/language.pseudo-types.php#language.types.mixed"><code>mixed</code></a>, c\'est-à-dire que la valeur peut avoir un type différent en fonction de la situation.']); ?>

        <h2>Manipulation de dates</h2>
        <h3>Les fonctions <a href="https://www.php.net/manual/fr/function.date.php"><code>date()</code></a> et <a href="https://www.php.net/manual/fr/function.mktime.php"><code>mktime()</code></a></h3>
        <?php afficheCode(['fichiers' => ['dateMkTime.php'], 'execution' => 'dateMkTime.php']) ?>

        <h3>Modification des paramètres de <code>php.ini</code> pour ce script grâce à <a href="https://www.php.net/manual/fr/function.ini-set.php"><code>ini_set()</code></a></h3>
        <?php afficheCode(['fichiers' => ['iniSet.php'], 'execution' => 'iniSet.php']); ?>

    </body>
</html>