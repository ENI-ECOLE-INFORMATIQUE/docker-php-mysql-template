<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 1 : Variables et constantes</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <?php require '../../afficheCode.php'; ?>
        <h1>TP 1 : Variables et constantes</h1>
        <h2 class="dif1">Question 1</h2>
        <section class="enonce">Créer 4 variables ayant pour valeur <code>true</code>, <code>42</code>, <code>12.34</code> et <code>'Hello !'</code><br>
        Afficher le type et la valeur de ces variables.</section>
        <h2 class="dif2">Question 2</h2>
        <section class="enonce">Créer un bloc de code php initialisant une variable et une constante. Ces valeurs sont affichées deux fois à l'aide de la fonction echo comme ceci : La variable vaut 4240 et la constante Bonjour. La première fois en utiliant les guillemets (&nbsp;"&nbsp;) comme délimiteur de chaîne de caractères puis l'appostrophe (&nbsp;'&nbsp;).</section>
        <h2 class="dif2">Question 3</h2>
        <section class="enonce">Donner la valeur booléenne des variables <code>$a</code>, <code>$b</code>, <code>$c</code>, <code>$d</code>, <code>$e</code> et <code>$f</code>.</section>
        <?php
        echo '<div>';
        highlight_file('./tp1q3.php');
        echo '</div>';
        ?>
        <h2 class="dif3">Question 4</h2>
        <section class="enonce">Donner les valeurs de <code>$x</code>, <code>$y</code>, <code>$z</code> à la fin du script suivant (sans l’exécuter !  :-)).</section>
        <?php
        echo '<div>';
        highlight_file('./tp1q4.php');
        echo '</div>';
        ?>
        <h2 class="dif3">Question 5</h2>
        <section class="enonce">Donner le type et la valeur de chacune des variables pendant et à la fin du script suivant et vérifier ensuite vos réponses en modifiant le script. Modifier également le script pour ne plus avoir de messages d'avertissement dûs à des transtypages implicites.</section>
        <?php
        echo '<div>';
        highlight_file('tp1q5.php');
        echo '</div>';
        ?>
    </body>
</html>