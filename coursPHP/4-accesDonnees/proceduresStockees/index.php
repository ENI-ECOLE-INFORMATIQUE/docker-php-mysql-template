<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PDO : Les procédures et fonctions stockées</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>PDO : Les procédures et fonctions stockées</h1>
        <h2>Procédure stockée sans paramètre</h2>
        <?php
        $fichiers = ['sansParam.php'];
        $execution = 'sansParam.php';
        require '../../afficheCode2.php';
        ?>
        
        <h2>Procédure stockée avec paramètre</h2>
        <?php
        $fichiers = ['avecParam.php'];
        $execution = 'avecParam.php';
        require '../../afficheCode2.php';
        ?>
        
        <h2>Fonction stockée</h2>
        <?php
        $fichiers = ['fct.php'];
        $execution = 'fct.php';
        require '../../afficheCode2.php';
        ?>
    </body>
</html>
