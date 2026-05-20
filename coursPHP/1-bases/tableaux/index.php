<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les tableaux</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>Les tableaux</h1>

        <h2>Tableau numérique (indices ordonnés consécutifs)</h2>
        <?php
        $fichiers = ['tnioc.php'];
        $execution = 'tnioc.php';
        require '../../afficheCode2.php';
        require_once 'afficheTab.php';
        afficheTab($n);
        ?>

        <h2>Tableau numérique (indices non ordonnés, non consécutifs)</h2>
        <?php
        $fichiers = ['tninn.php'];
        $execution = 'tninn.php';
        require '../../afficheCode2.php';
        afficheTab($m);
        ?>

        <h2>Tableau associatif</h2>
        <?php
        $fichiers = ['ta.php'];
        $execution = 'ta.php';
        require '../../afficheCode2.php';
        afficheTab($a, 'clés');
        ?>

        <h2>Tableau mixte</h2>
        <?php
        $fichiers = ['tm.php'];
        $execution = 'tm.php';
        require '../../afficheCode2.php';
        afficheTab($nb, 'indices/clés');
        ?>

        <h2>Tableau multidimensionnel (liste de villes par pays)</h2>
        <?php
        $fichiers = ['tmult.php'];
        $execution = 'tmult.php';
        require '../../afficheCode2.php';
        afficheTab($villes, 'indices/clés');
        ?>

        <h2>Syntaxe avec <code>array()</code> ou <code>[]</code></h2>
        <?php
        $fichiers = ['array.php'];
        $execution = 'array.php';
        require '../../afficheCode2.php';
        echo '<h4>$nombres</h4>';
        afficheTab($nombres, 'indices/clés', false);
        echo '<h4>$ville</h4>';
        afficheTab($villes, 'indices/clés', false);
        ?>

        <h2>Accès aux éléments</h2>
        <?php
        $fichiers = ['accEle.php'];
        $execution = 'accEle.php';
        require '../../afficheCode2.php';
        ?>
        <h2>Fonctions <code>explode()</code> et <code>implode()</code></h2>
        <?php
        $fichiers = ['expImp.php'];
        $execution = 'expImp.php';
        require '../../afficheCode2.php';
        afficheTab($couleur, 'indices');
        ?>
    </body>
</html>
