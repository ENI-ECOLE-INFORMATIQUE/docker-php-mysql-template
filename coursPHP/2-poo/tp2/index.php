<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 2 : La suite de la POO</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>TP 2 : La suite de la POO</h1>
        <h2 class="dif1">Question 1</h2>
        <section class="enonce">Créer une classe abstraite Personnage caractérisé par son nom. Lorsqu'une instance de personnage est utilisée en tant que chaîne de caractère c'est le nom du personnage qui est utilisé. Cette classe possède une méthode abstraite blessure() prenant en paramètre la valeur réelle correspondant à la puissance de la blessure.</section>
        <?php
      
        <h2 class="dif2">Question 2</h2>
        <section class="enonce">Créer un trait KameHameHa possédant les attributs de type réel puissance et dernier lancé. Ce trait définie également une fonction permettant de lancé un KaméHaméHa. Elle prend en paramètre le personnage ciblé par le KaméHaméHa. Si le dernier tir a été réalisé moins d'une milliseconde avant, une exception est levé car le personnage n'a pas eu le temps de rassembler son énergie. La puissance du tir est calculée de la manière suivante : après 101 milliseconde, le tir est au maximum de la puissance du personnage (valeur de l'attribut puissance). entre 1 et 101 miliseconde c'est proportionnel à son temps de récupération.</section>
        <h2 class="dif2">Question 3</h2>
        <section class="enonce">Créer deux classes héritant de Personnage : Saiyan et Cyborg. Ils sont caractérisés par une valeur réelle correspondant aux points de vie du personnage. La méthode blessure() retire aux points de vie la puissance de la blessure subie. Si un personnage n'a plus de point de vie, la méthode lève une exception. Les cyborgs ont une armure qui fait qu'ils ont une chance sur deux de ne finalement pas être touché.</section>
        <h2 class="dif1">Question 4</h2>
        <section class="enonce">Déclarer plusieurs personnages se lançant des KaméHaméHas.</section>
      
    </body>
</html>
