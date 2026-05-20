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
            $chaineCnx = 'mysql:host=localhost;dbname=Restaurants';
            $pdo = new PDO($chaineCnx, 'webUser', '19L_lS9Dl(Hr8Yyl');
            $requete = 'SELECT idRestaurant, nom, ville, description FROM Restaurants;';
            $restaurants = $pdo->query($requete)->fetchAll(PDO::FETCH_NAMED);

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