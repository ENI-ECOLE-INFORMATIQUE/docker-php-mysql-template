<form action="" method="POST">
    <label for="idNom">Login :</label>
    <input type="text" id="idNom"name="nom"
            <?= $nom ? ' value="' . $nom . '"' : '' ?>>
    <label for="idMdp">Mot de passe :</label>
    <input type="password" id="idMdp" name="mdp"
            <?= $idp ? ' value="' . $idp . '"' : '' ?>>
    <label>Durée de conservation des informations (jours)</label>
    <input type="number" name="dur">
    <input type="submit" value="se connecter">
</form>
