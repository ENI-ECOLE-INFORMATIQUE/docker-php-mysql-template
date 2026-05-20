<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire traitement à part</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1 title="au-delà du programme">Le regroupement de champs</h1>

        <h2>Les données récupérées</h2>
        <?php
        require_once '../../afficheCode.php';
        afficheCode(['fichiers' => ['getPostRequest.php'], 'execution' => 'getPostRequest.php']);
        ?>

        <h2>Les méthodes <a href="https://www.php.net/manual/fr/function.filter-var-array.php"><code>filter_var_array</code></a> et <a href="https://www.php.net/manual/fr/function.filter-input-array.php"><code>filter_input_array</code></a></h2>
        <?php
        afficheCode(['fichiers' => ['filterTableauC.php'], 'execution' => 'filterTableauC.php']);
        ?>
    </body>
</html>