<?php
if (isset($_POST['ok'])) {
    $message = '';

    $filtre = [
        'nom' => FILTER_SANITIZE_SPECIAL_CHARS,
        'age' => FILTER_VALIDATE_INT,
        'email' => FILTER_VALIDATE_EMAIL,
        'mdp' => [
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => [
                'regexp' => '#^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$#'
            ]
        ],
    ];

    $donnees = filter_var_array($_POST, $filtre);

    foreach ($donnees as $champ => $valeur) {
        if (!$valeur) {
            $message .= "Le champ " . $champ . " ne respecte pas les règles imposées<br>";
        }
    }

    if (!$donnees['nom']) {
        $message .= "Le nom doit obligatoirement être renseigné !<br>";
    }

    if (!$message) {
        // Traitement des données
        // ...
        // Redirection pour ne pas retraiter les données en cas d'actualisation de la page
        header('location: confirmation.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire traitement intégré</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1 class="execution">Formulaire traitement intégré</h1>
        <div>
            <form action="" method="POST">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                <label for="idNom">Nom : </label>
                <input type="text" name="nom" id="idNom"<?= isset($_POST['nom']) ? ' value="' . $_POST['nom'] . '"' : '' ?>>
                <label for="idAge">Âge : </label>
                <input type="number" name="age" id="idAge"<?= isset($_POST['age']) ? ' value="' . $_POST['age'] . '"' : '' ?>>
                <label for="idMail">E-Mail : </label>
                <input type="email" name="email" id="idMail"<?= isset($_POST['email']) ? ' value="' . $_POST['email'] . '"' : '' ?>>
                <label for="idMdp">Mot de passe : </label>
                <input type="password" name="mdp"
                       title="8 caractères minimum avec au moins une majuscule, une minuscule et un chiffre"
                       pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}" required id="idMdp">
                <input type="submit" name="ok" value="OK">
            </form>
        </div>
        <h2>Code de la page :</h2><code data-type="php"><?php ini_set('highlight.comment', '#7D784D');highlight_file(__FILE__); ?></code>
    </body>
</html>