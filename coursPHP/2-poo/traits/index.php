<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Traits</title>
    <link href="../../style/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="../../index.php" class="banniere">Cours PHP</a>
    <h1><a href="https://www.php.net/manual/fr/language.oop5.traits.php" target="_blank">Trait</a></h1>
    <p>Les traits sont une nouvelle nouvelle construction introduite depuis la version 5.4 de PHP.
        Un trait permet de regrouper un ensemble d'attributs et de méthodes.
        Ce trait peut ensuite être utilisé par une ou plusieurs classes qui vont ainsi récupérer de manière similaire à de l'héritage les attributs et les méthodes définies dans le trait.</p>
    <p>Les traits sont donc une solution directe au problème de l’héritage unique (impossibilité d'hériter de plusieurs classes).
    </p>
    <?php
    require_once '../../afficheCode.php';
    afficheCode(['fichiers' => ['NomTrait.php']]); ?>
    <p>Voici les caractéristiques des traits :
    <ul class="ulBlanc">
        <li>un trait ressemble beaucoup à une classe.</li>
        <li>Déclaré en utilisant le mot-clé trait.</li>
        <li>Convention de nommage : ajouter le suffixe Trait</li>
        <li>Il n'est pas possible d'hériter ou d'implémenter un trait.</li>
        <li>Vous ne pouvez pas non plus instancier un trait.</li>
        <li>But : Améliorer nos classes, et non de les remplacer.</li>
    </ul>
    </p>
    <h2>Création de plusieurs Traits</h2>
    <h3>Création du 1<sup>er</sup> Trait : AutoIdentifiableTrait</h3>
    <?php afficheCode(['fichiers' => ['AutoIdentifiableTrait.php'], 'nomFichier' => true]); ?>

    <h3>Création du 2<sup>e</sup> Trait : UuidTrait</h3>
    <?php afficheCode(['fichiers' => ['UuidTrait.php'], 'nomFichier' => true]); ?>

    <h3>Création du 3<sup>e</sup> Trait : NameableTrait</h3>
    <?php afficheCode(['fichiers' => ['NommableTrait.php'], 'nomFichier' => true]); ?>

    <h3>Création du 4<sup>e</sup> Trait : TimestampableTrait</h3>
    <?php afficheCode(['fichiers' => ['TimestampableTrait.php'], 'nomFichier' => true]); ?>

    <h2>Utilisation d'un trait</h2>
    <h3>Syntaxe</h3>
    <?php afficheCode(['fichiers' => ['utilisation.php']]); ?>
    <h3>Création d'une classe Product dans le fichier <code>APP\Entity\Product.php</code> :</h3>
    <?php
    afficheCode(['fichiers' => ['Produit.php'], 'nomFichier' => true]);
    ?>

    <p>La classe Produit utilise quatre traits AutoIdentifiableTrait, UuidTrait, NameableTrait et TimestampableTrait.</p>

    <p>Cela signifie que la classe Produit aura les propriétés et les méthodes de tous les traits au sein de sa classe.
        Et vous pourrez utiliser n'importe lequel de ces traits dans une autre classe si vous le souhaitez.
    </p>
    <p>
        Cependant si vous modifiez un trait, les changements seront répercutés dans toutes les classes utilisant le trait que vous aurez modifié.
    </p>
    <p>Et là, vous allez me demander : "Mais quel est l'intérêt de faire un trait ?".</p>
    <p>Et la réponse est : ça vous permet de normaliser le format de vos propriétés à travers plusieurs classes par exemple car rien ne vous empêche d'utiliser les traits que nous venons de créer dans une classe Utilisateur ou Livre par exemple car cela a les avantages suivants :
    <ul>
        <li>La déclaration est unique, c'est-à-dire que si vous êtes une faute de frappe, il suffit de le faire qu'une seule fois dans celui-ci au lieu de chercher toutes les occurrences dans toutes les classes où c'est utilisé.</li>
        <li>Cela permet d'être certain que ce qui est déclaré dans le trait l'est de manière consistante dans toutes les classes où il est utilisé.</li>
        <li>Enfin, si vous avez un traitement particulier à faire qui ne colle pas à celle qui est dans le trait, il suffit de mettre le code dans la classe en question comme d'habitude et de ne pas importer le trait au sein de la classe.</li>
    </ul>
    </p>
    <h2>Instanciation d'une classe utilisant un ou plusieurs traits</h2>
    <p>
        Une classe utilisant un ou plusieurs traits s'utilise de la même manière que si le code avait été entièrement défini au sein de cette classe.
    </p>
    <?php
    afficheCode(['fichiers' => ['instanciation.php'], 'execution' => 'instanciation.php']);
    ?>
    <h2>Attention aux conflits</h2>
    <p>Que se passe-t-il si 2 traits importés ont des méthodes similaires ?</p>
    <p>Solution : Définir quel trait utiliser pour certaines méthodes.</p>
    <?php afficheCode(['fichiers' => ['NommableTrait.php', 'CaracteristiqueTrait.php', 'ExempleTraitConflit.php'], 'nomFichier' => true]); ?>
    <p>Lors de l'appel aux méthodes <code>setNom()</code> et <code>getNom()</code>, ce sont celles du trait <code>NommableTrait</code> qui sont appelées.
        Pour preuve, la valeur n'est pas passée en majuscules.
    </p>
    <?php afficheCode(['fichiers' => ['instanciationConflit.php'], 'execution' => 'instanciationConflit.php']); ?>
</body>

</html>