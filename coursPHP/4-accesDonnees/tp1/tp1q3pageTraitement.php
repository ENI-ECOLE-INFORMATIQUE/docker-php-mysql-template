<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 1 question 3</title>
    <link href="../../style/style.css" rel="stylesheet">
    <link href="../../style/correction.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <a href="../../index.php" class="banniere">Cours PHP</a>
    <h1>TP 1 : Requêter une base de données</h1>
    <h2>Page de traitement</h2>
    <?php
    $enregistrer = filter_input(INPUT_POST, 'enregistrer', FILTER_SANITIZE_SPECIAL_CHARS);
    $idPers = filter_input(INPUT_POST, 'numId', FILTER_VALIDATE_INT);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_SPECIAL_CHARS);
    $cp = filter_input(INPUT_POST, 'cp', FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '#^\d{5}$#']]);
    $ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_SPECIAL_CHARS);
    $ok = false;

    if ($enregistrer && $idPers && $nom && $prenom && $adresse && $cp && $ville) {
        require_once './tp1cnx.php';

        $prep = $pdo->prepare('UPDATE proprietaires SET nom=:nom, '
            . 'prenom=:prenom, adresse=:adresse, codepostal=:cp, '
            . 'ville=:ville WHERE id_pers=:id_pers;');
        $prep->bindValue(':id_pers', $idPers);
        $prep->bindValue(':nom', $nom);
        $prep->bindValue(':prenom', $prenom);
        $prep->bindValue(':adresse', $adresse);
        $prep->bindValue(':ville', $ville);
        $prep->bindValue(':cp', $cp);
        $rep = $prep->execute();

        if ($rep) {
            echo '<div>Vos données ont bien été mises à jour</div>';
            $ok = true;
        }
    }
    if (!$ok) {
        echo '<div>Désolé mais vos données n\'ont pas pu être mises '
            . 'à jour</div>';
    }
    ?>
    <h2>Code de la page :</h2><code data-type="php"><?php highlight_file(__FILE__); ?></code>
</body>
</html>