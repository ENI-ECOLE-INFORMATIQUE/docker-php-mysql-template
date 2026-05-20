<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 2 : Tableaux</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <?php require '../../afficheCode.php'; ?>
        <h1>TP 2 : Tableaux</h1>
        <h2 class="dif1">Question 1</h2>
        <section class="enonce">Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l'âge de la personne.</section>
        <h2 class="dif1">Question 2</h2>
        <section class="enonce">Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence et l'âge de la personne avec une série de valeurs associées.</section>
        <h2 class="dif1">Question 3</h2>
        <section class="enonce">Utiliser une boucle foreach pour lire les tableaux des exercices 1 et 2 et afficher les informations avec le format suivant :
            <ul><li>Element dupont<ul><li>élément 0 : gérard </li><li>élément 1 : paris </li><li>élément 2 : 67 </li></ul></li><li>Element badin<ul><li>élément 0 : aurélie </li><li>élément 1 : nantes </li><li>élément 2 : 31 </li></ul></li></ul>
        </section>
       
        <h2 class="dif2">Question 4</h2>
        <section class="enonce">Créer un tableau contenant une liste d'adresses e-mail. Extraire le nom de serveur de ces données, puis réaliser des statistiques sur les occurrences de chaque fournisseur d'accès.</section>
        <h2 class="dif3">Question 5</h2>
        <section class="enonce">Créer un tableau d'entiers variant de 1 à 63, puis à partir de celui ci un autre tableau de nombres variant de 0 à 6.3. Créer ensuite un tableau associatif dont les clés X varient de 0 à 6.3 et dont les valeurs sont sin(X). Afficher ce tableau dans un tableau HTML.</section>
       
    </body>
</html>