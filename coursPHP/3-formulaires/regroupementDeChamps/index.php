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
        <h1 title="au-delà du programme" class="execution">Le regroupement de champs</h1>
        <div>
            <form action="formulaireTraitement.php" method="POST">
                <label for="idNom">Nom : </label><input type="text" name="personne[nom]" id="idNom">
                <label for="idAge">Âge : </label><input type="number" name="personne[age]" id="idAge">
                <label for="idMail">E-Mail : </label><input type="email" name="compte[email]" id="idMail">
                <label for="idMdp">Mot de passe : </label>
                <input type="password" name="compte[mdp]"
                       title="8 caractères minimum avec au moins une majuscule, une minuscule et un chiffre"
                       required id="idMdp" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}">
                <input type="submit" name="ok" value="Valider">
            </form>
        </div>
        <h2>Code de la page :</h2><code data-type="html"><?php highlight_file(__FILE__); ?></code>
    </body>
</html>