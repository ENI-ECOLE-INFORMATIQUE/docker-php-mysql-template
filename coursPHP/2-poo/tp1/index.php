<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 1 : Les bases de la POO</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>TP 1 : Les bases de la POO</h1>
        <h2 class="dif1">Question 1</h2>
        <section class="enonce">Écrire une classe représentant une ville. Elle doit avoir les méthodes <code>setNom()</code> et <code>setDépartement()</code> et une méthode affichant &laquo;&nbsp;la ville X est dans le département Y&nbsp;&raquo;. Cette classe n'a pas de constructeur.<br>Créer des instances de Ville, affecter leurs propriétés et utiliser la méthode d'affichage.</section>
         <h2 class="dif1">Question 2</h2>
        <section class="enonce">Créer une autre classe représentant une ville mais sans les accesseurs et avec un constructeur à la place.<br>Réaliser les mêmes opérations de création d'instances et d'affichage.</section>
      <h2 class="dif1">Question 3</h2>
        <section class="enonce">Créer une classe nommée <code>VilleAvecRegion</code> héritant de la classe <code>Ville</code> affichant &laquo;&nbsp;la ville X est dans le département Y de la région Z&nbsp;&raquo;.</section>
        <h2 class="dif1">Question 4</h2>
        <section class="enonce">Modifier la classe Ville avec constructeur pour que l'on puisse connaître la ville ayant le nom le plus long.</section>
      <h2 class="dif2">Question 5</h2>
        <section class="enonce">Créer une classe nommée <code>Form</code> représentant un formulaire HTML. Le constructeur doit créer le code d'en-tête du formulaire en utilisant les éléments <code>&lt;form&gt;</code> et <code>&lt;fieldset&gt;</code>.<br>Une méthode <code>setText()</code> doit permettre d'ajouter une zone de texte.<br>Une méthode <code>setSubmit()</code> doit permettre d'ajouter un bouton d'envoi.<br>Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML correspondants.<br>La méthode <code>getForm()</code> doit retourner tout le code HTML de création du formulaire.<br>Créer des objets <code>Form</code> et y ajouter deux zones de texte et un bouton d'envoi. Tester l'affichage obtenu.</section>
     
        <h2 class="dif2">Question 6</h2>
        <section class="enonce">Créer une sous-classe nommée <code>Form2</code> en dérivant la classe <code>Form</code> de la question précédente. Cette nouvelle classe doit permettre de créer des formulaires ayant en plus des boutons radio et des cases à cocher. Elle doit donc avoir les méthodes supplémentaires qui correspondent à ces créations.<br>Créer des objets et tester le résultat.</section>
       

        <h2 class="dif2">Question 7</h2>
        <section class="enonce">Créer une classe abstraite représentant une personne. Elle déclare les propriétés <code>nom</code> et <code>prenom</code> et un constructeur.<br>Créer une classe <code>Client</code> dérivée de la classe <code>Personne</code> en y ajoutant la propriété <code>adresse</code>, une méthode <code>setcoord()</code> et la méthode <code>__toString()</code> qui retourne les coordonnées complètes de la personne.<br>Créer une classe <code>Electeur</code> dérivée de la même classe abstraite et y ajouter deux propriétés <code>bureau_de_vote</code> et <code>vote</code> ainsi qu'une méthode <code>avote()</code> qui enregistre que la personne a voté dans la propriété <code>vote</code>.</section>
    
    </body>
</html>
