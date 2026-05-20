<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire généré</title>
    <link href="../../style/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="../../index.php" class="banniere">Cours PHP</a>
    <h1 class="execution">Formulaire traitement à part</h1>
    <div>
        <form action="formulaireTraitement.php" method="GET">
            <h3>Disponibilités :</h3>
            <label for="idJour">Jour : </label>
            <select id="idJour" name="jour">
                <?php
                $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];
                foreach ($jours as $numero => $nomJour) {
                    echo '<option value="' . $numero . '">' . $nomJour . "</option>";
                }
                ?>
            </select>
            <h3>Cours souhaités :</h3>
            <?php
            $cours = ['PHP', 'HTML', 'JavaScript', 'MySQL', 'CSS'];
            foreach ($cours as $c) {
                echo '<div><input id="id' . $c . '" type="checkbox" name="' . $c . '"><label for="id' . $c . '">' . $c . '</label></div>';
            }
            ?>
            <h3>Mode d'enseignement</h3>
            <?php
            $modalites = ['DIST' => 'à distance', 'PRES' => 'en présentiel'];
            foreach ($modalites as $c => $m) {
                echo '<div><input id="id' . $c . '" type="radio" name="modalite" value="' . $m .
                '"><label for="id' . $c . '">' . $m . '</label></div>';
            }
            ?>
            <input type="submit" value="Ok" name="btnValider">
        </form>
    </div>
    <h2>Code de la page :</h2><code data-type="php"><?php ini_set('highlight.comment', '#7D784D');
                                                    highlight_file(__FILE__); ?></code>
</body>

</html>