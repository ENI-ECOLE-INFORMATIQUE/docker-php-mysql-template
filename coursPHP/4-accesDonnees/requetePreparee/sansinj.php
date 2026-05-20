<?php
if(!isset($_GET['nom'])) {
?>
    <form action="#inj">
        <label for="idNom">Nom de l'article recherché</label>
        <input type="text" name="nom" id="idNom">
        <input type="submit" value="rechercher">
    </form>
<?php
} else {
    require '../connexion/connexion.php';
    $nom = $_GET['nom'];
    $query = 'SELECT * FROM articles WHERE libelle LIKE ?;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(1, "%$nom%");
    $prep->execute();
    $arr = $prep->fetch();

    if($arr) {
        var_dump($arr);
        echo 'Article : ' . $arr['libelle'] . ' à ' . $arr[2] . ' €<br>';
    } else
        echo 'article non trouvé';
    echo '<p>Articles dans la base de données :</p>';
    require '../afficheTousLesArticles.php'; 
}