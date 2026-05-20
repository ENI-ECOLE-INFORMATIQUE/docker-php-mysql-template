<?php
$connexion = filter_input(INPUT_POST, 'connexion', FILTER_SANITIZE_SPECIAL_CHARS);
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
$id_pers = filter_input(INPUT_POST, 'numId', FILTER_VALIDATE_INT);
$ok = false;
if ($connexion && $nom && $id_pers) {
    require_once './tp1cnx.php';

    $prep = $pdo->prepare('SELECT nom, prenom, adresse, ville, codepostal FROM proprietaires WHERE id_pers=:id_pers AND nom=:nom;');
    $prep->bindValue(':id_pers', $id_pers);
    $prep->bindValue(':nom', $nom);
    $prep->execute();
    $donnees = $prep->fetch(PDO::FETCH_NAMED);

    if ($donnees) {
        ?>
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
                <h2>Page d'édition des données</h2>
                <div>
                    <form action="tp1q3pageTraitement.php" method="POST">
                        <fieldset>
                            <legend>Modification de vos informations</legend>
                            <input type="hidden" name="numId" value="<?=$id_pers?>">
                            <label for="nom">Nom de famille : </label>
                            <input id="nom" name="nom" value="<?=$donnees['nom']?>">
                            <label for="prenom">Prénom : </label>
                            <input id="prenom" name="prenom" value="<?=$donnees['prenom']?>">
                            <label for="adresse">Adresse : </label>
                            <input id="adresse" name="adresse" value="<?=$donnees['adresse']?>">
                            <label for="cp">Code Postal : </label>
                            <input type="number" id="cp" name="cp" value="<?=$donnees['codepostal']?>">
                            <label for="ville">Ville : </label>
                            <input id="ville" name="ville" value="<?=$donnees['ville']?>">
                            <input type="submit" name="enregistrer" value="Enregistrer">
                        </fieldset>
                    </form>
                    <?php
                    $ok = true;
                    ?>
                </div>
                <h2>Code de la page :</h2><code data-type="php"><?php highlight_file(__FILE__); ?></code>
            </body>

            </html>
        <?php
    }
}
if (!$ok) {
    header("refresh:5;url=tp1q3c.php");
    echo '<h1>echec de l\'identification !</h1>Vous allez être renvoyé sur la page d\'authentification...';
}
