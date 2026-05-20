<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
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
        <h1>Vos restaurants préférés</h1>
        <?php
            foreach($restaurants as $r) :
                ?>
                    <a href="restaurant.php?idRestaurant=<?=$r['idRestaurant']?>">
                        <h2><?=$r['nom']?></h2>
                    </a>
                    <address><?=$r['ville']?></address>
                    <?=$r['description']?>
                <?php
            endforeach;
        ?>
    </main>
</body>
</html>