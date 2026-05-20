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
    $query = "SELECT libelle, prix FROM articles WHERE libelle LIKE '%$nom%';";
    $arr = $pdo->query($query)->fetch(PDO::FETCH_NUM);

    if($arr) {
        var_dump($arr);
        echo 'Article : ' . $arr[0] . ' à ' . $arr[1] . ' €<br>';
    } else
        echo 'Article non trouvé';
    echo '<p>Articles dans la base de données :</p>';
    require '../afficheTousLesArticles.php'; 
}