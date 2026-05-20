<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5 : Expression rationnelles</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>TP 5 : Expression rationnelles</h1>
        <h2 class="dif1">Question 1</h2>
        <section class="enonce">Créer une expression rationnelle de validation d'un numéro de carte bancaire.
        Ce numéro est composé de seize chiffres éventuellement groupés par quatre.</section>
        <?php
        require_once '../../afficheCode.php';
        ?>
        <h2 class="dif2">Question 2</h2>
        <section class="enonce">Créer une expression rationnelle de validation d'une adresse HTTP.<br>
            Le modèle doit répondre à la définition suivante :
            <ol>
                <li>Commencer par &laquo;&nbsp;www.&nbsp;&raquo;</li>
                <li>Être suivi par des lettres puis éventuellement un point ou un tiret suivis d'un deuxième groupe de lettres</li>
                <li>Se terminer par un point suivi de l'extension qui peut avoir de 2 à 4 caractères.</li>
            </ol>  
            Par exemple, les adresses www.machin.com ou www.machintruc.uk sont valides.
        </section>
       <h2 class="dif2">Question 3</h2>
        <section class="enonce">Créer une expression rationnelle permettant de remplacer les caractères \n par la balise &lt;br&gt;.</section>
       <h2 class="dif3">Question 4</h2>
        <section class="enonce">Transformer un extrait d'une page Wikipédia en syntaxe WIKI en du texte au format HTML.<br>La documentation de la syntaxe WIKI est disponible sur la page <a href="https://fr.wikipedia.org/wiki/Aide:Syntaxe">https://fr.wikipedia.org/wiki/Aide:Syntaxe</a>.<br>Ne se préoccuper que des éléments suivants :
            <ul>
                <li>Mises en forme (gras, italique)</li>
                <li>Titres</li>
                <li>Images (pour les très forts !)</li>
                <li>Liens (pour les très forts également !)</li>
            </ul>
            Exemple d'un extrait d'une page wikipedia (<a href="https://fr.wikipedia.org/wiki/PHP">https://fr.wikipedia.org/wiki/PHP</a>) :<br>
            <code>== Histoire ==<br>
                Le langage PHP fut créé en [[1994]] par [[Rasmus Lerdorf]] pour son [[site web]]. C'était à l'origine une [[bibliothèque logicielle]] en [[C (langage)|C]] dont il se servait pour conserver une trace des visiteurs qui venaient consulter son [[Curriculum vitæ|CV]]. Au fur et à mesure qu'il ajoutait de nouvelles fonctionnalités, Rasmus a transformé la bibliothèque en une implémentation capable de communiquer avec des bases de données et de créer des applications dynamiques et simples pour le [[World Wide Web|Web]]. Rasmus décida alors en [[1995]] de publier son code, pour que tout le monde puisse l'utiliser et en profiter. PHP s'appelait alors PHP/FI (pour '''''P'''ersonal '''H'''ome '''Pa'''ge Tools/'''F'''orm '''I'''nterpreter''). En [[1997]], deux étudiants, [[Andi Gutmans]] et [[Zeev Suraski]], redéveloppèrent le cœur de PHP/FI. Ce travail aboutit un an plus tard à la version 3 de PHP, devenu alors ''PHP: Hypertext Preprocessor''. Peu de temps après, Andi Gutmans et Zeev Suraski commencèrent la réécriture du moteur interne de PHP. Ce fut ce nouveau moteur, appelé ''[[Zend Engine]]'' — le mot ''Zend'' est la contraction de '''''Ze'''ev'' et ''A'''nd'''i'' — qui servit de base à la version 4 de PHP.<br>
                <br>
                === Utilisations ===<br>
                [[Image:Server-side websites programming languages.PNG|thumb|Répartition des langages de programmation côté serveur des sites web, le 28 avril 2016.]]<br>
                En [[2002]], PHP est utilisé par plus de 8 millions de sites Web à travers le monde, en [[2007]] par plus de 20 millions et en 2013 par plus de 244 millions.</code>
        </section>
    </body>
</html>