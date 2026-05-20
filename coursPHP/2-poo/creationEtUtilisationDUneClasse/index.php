<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exemple de classe</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Définition d'une classe</h1>
        <h2>Création d'une classe dans le fichier <code>Utilisateur.php</code> :</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['../classes/Utilisateur.php', '../classes/Utilisateur2.php'], 'nomFichier' => true, 'commentaires' => 'La seconde classe utilise la promotion d\'attributs du constructeur. Cela permet d\'un même coup de définir le constructeur avec les paramètres attendus, mais également de déclarer les attributs et de les initialiser.']);
        ?>
        <h2>Utilisation d'une classe</h2>

        <h3>Inclusion du fichier qui contient la définition de la classe utilisateur (<code>Utilisateur.php</code>)</h3>
        <?php afficheCode(['fichiers' => ['inclusionClasse.php'], 'execution' => 'inclusionClasse.php']) ?>

        <h3>Instanciation d'un utilisateur</h3>
        <?php
        $fichiers = ['creationInstance.php'];
        $execution = 'creationInstance.php';
        $commentaires = 'La variable <code>$jean</code> contient maintenant une instance de la classe <code>Utilisateur</code>.';
        require '../../afficheCode2.php';
        ?><br>

        <h3>Appel d'une méthode</h3>
        <p>Les méthodes sont accessibles par l'opérateur <code>-&gt;</code>.</p>
        <?php
        $fichiers = ['appelMethode.php'];
        $execution = 'appelMethode.php';
        unset($commentaires);
        require '../../afficheCode2.php';
        ?>

        <h3>appel à la méthode magique <code>__toString()</code></h3>
        <?php
        $fichiers = ['appelMethodeMagique.php'];
        $execution = 'appelMethodeMagique.php';
        $commentaires = 'Lors qu\'une instance est utilisée dans un contexte où une chaine de caractères est attendue, automatiquement la méthode <a href="https://www.php.net/manual/fr/language.oop5.magic.php#object.tostring"><code>__toString()</code></a> est appelée.';
        require '../../afficheCode2.php';
        ?>

        <h3>à la fin du script appel automatique au destructeur</h3>
        <h4 class="execution">Exécution</h4>
        <?php unset($jean); ?>
    </body>
</html>