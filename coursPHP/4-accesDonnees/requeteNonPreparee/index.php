<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PDO : Requête non préparée</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>PDO : Requête non préparée</h1>
        <h2>Ordre de type SELECT</h2>
        <h3>Récupération d'une ligne</h3>
        <?php
        require '../../afficheCode.php';
        afficheCode(['fichiers' => ['np1l.php'], 'execution' => 'np1l.php']);
        ?>
        
        <h3>PDO::FETCH_NAMED</h3>
        <?php
        afficheCode(['fichiers' => ['np1l_nom.php'], 'execution' => 'np1l_nom.php']);
        ?>
        
        <h3>PDO::FETCH_NUM</h3>
        <?php
        afficheCode(['fichiers' => ['np1l_num.php'], 'execution' => 'np1l_num.php']);
        ?>
        
        <h3 id="inj">Attention à l'injection SQL</h3>
        <?php
        afficheCode(['fichiers' => ['npinj.php'], 'execution' => 'npinj.php', 'commentaires' => 'Il est possible de faire de l\'injection SQL car la requete est créée en concatennant une valeur provenant de l\'utilisateur. Par exemple, il est possible de saisir :<br>\';UPDATE articles SET libelle=UPPER(libelle);--']);
        ?>

    </body>
</html>
