<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PDO : Requête préparée</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1>PDO : Requête préparée</h1>
        <h2>Ordre de type SELECT</h2>
        <h3>Avec paramètre non nommé</h3>
        <?php
        require '../../afficheCode.php';
        afficheCode(['fichiers' => ['p1l.php'], 'execution' => 'p1l.php']);
        ?>

        <h3 id="inj">Plus d'injection de SQL possible</h3>
        <?php
        afficheCode(['fichiers' => ['sansinj.php'], 'execution' => 'sansinj.php', 'commentaires' => 'Vous pouvez essayez d\'injecter du code SQL dans la requête mais celle-ci est correctement protégée grâce au paramètre.']);
        ?>

        <h3>Avec paramètre nommé</h3>
        <?php
        afficheCode(['fichiers' => ['ppl.php'], 'execution' => 'ppl.php']);
        ?>

        <h2>Ordre de type INSERT, UPDATE ou DELETE</h2>

        <h3>Insertion</h3>
        <?php
        afficheCode(['fichiers' => ['ins.php'], 'execution' => 'ins.php']);
        ?>

        <h3>Modification</h3>
        <?php
        afficheCode(['fichiers' => ['upd.php'], 'execution' => 'upd.php']);
        ?>

        <h3>Suppression</h3>
        <?php
        afficheCode(['fichiers' => ['del.php'], 'execution' => 'del.php']);
        ?>

        <h2>La réutilisation d'une requête préparée</h2>

        <?php
        afficheCode(['fichiers' => ['reutil.php'], 'execution' => 'reutil.php', 'commentaires' => 'Il faut être attentif que nous n\'avons pas utilisé la même méthode pour associer les paramètres à la requête. Jusqu\'à présent c\'était la méthode <a href="https://www.php.net/manual/fr/pdostatement.bindvalue.php"><code>bindValue</code></a>. Dans cet exemple, c\'est la méthode <a href="https://www.php.net/manual/fr/pdostatement.bindparam.php"><code>bindParam</code></a> qui a été utilisée. Le paramètre est associé à une variable et non plus à une valeur : si la valeur de la variable change la valeur du paramètre aussi.']);
        //suppression des données créées
        ob_start();
        require 'del.php';
        ob_clean();
        ?>
    </body>
</html>
