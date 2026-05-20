<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants<?php if(isset($titre)) echo ' - ' . $titre;?></title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Restaurants Préférés</a></li>
                <li><a href="mailto:contact@restraurants.fr">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?=$contenu?>
    </main>
</body>
</html>