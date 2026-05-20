<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 1 - Traitement</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <a href="./index.php" class="precedent">Retour au TP</a>
        <h1>TP 1</h1>
        <h2>Page de traitement</h2>
        <table>
            <tr>
                <th>nom</th>
                <th>prénom</th>
                <th>adresse</th>
                <th>code postal</th>
                <th>ville</th>
            </tr>
            <tr>
                <td><?=filter_var($_POST['nom'], FILTER_SANITIZE_SPECIAL_CHARS)?></td>
                <td><?=filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS)?></td>
                <td><?=htmlspecialchars($_POST['adresse'])?></td>
                <td><?=filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_NUMBER_INT)?></td>
                <td><?=strip_tags($_POST['ville'])?></td>
            </tr>
        </table>
        <h2>Code de la page :</h2><code data-type="php"><?php highlight_file(__FILE__); ?></code>
    </body>
</html>
