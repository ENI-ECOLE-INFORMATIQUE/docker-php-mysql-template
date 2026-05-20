<?php
if (isset($_POST['ok'])) {
    if (!$_FILES['photo']['error']) {
        if(mime_content_type($_FILES['photo']['tmp_name'])==='image/jpeg') {
            if (move_uploaded_file($_FILES['photo']['tmp_name'], 'photos/image.jpg')) {
                header('location: confirmation.php');
                exit();
            } else {
                $message = "pb de copie<br>";
            }
        } else {
            $message = "Format de fichier incorrect. Il faut envoyer une image au format JPG.";
        }
    } else {
        switch ($_FILES['photo']['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $message = "Fichier trop volumineux !";
                break;
            default:
                $message = "Une erreur est survenue";
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire pour envoyer un fichier</title>
        <link href="../../style/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <h1 class="execution">Formulaire traitement intégré</h1>
        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                <!--enctype="multipart/form-data" pour l'uplaod du fichier-->
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                <label for="idPhoto">Photo : </label>
                <input type="file" name="photo" id="idPhoto" accept="image/jpeg">
                <input type="submit" name="ok" value="OK">
            </form>
        </div>
        <h2>Code de la page :</h2><code data-type="php"><?php ini_set('highlight.comment', '#7D784D');highlight_file(__FILE__); ?></code>
    </body>
</html>