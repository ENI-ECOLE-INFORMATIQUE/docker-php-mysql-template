<?php
require_once 'accesDonnees.php';

function getRestaurants() : iterable {
    $pdo = getConnexion();
    $requete = 'SELECT idRestaurant, nom, ville, description FROM Restaurants;';
    return $pdo->query($requete)->fetchAll(PDO::FETCH_NAMED);
}

function getRestaurant(int $idRestaurant) : array|bool {
    $pdo = getConnexion();
    $requete = 'SELECT nom, adresse, cp, ville, telephone, description FROM Restaurants WHERE idRestaurant=:idRestaurant;';
    $prep = $pdo->prepare($requete);
    $prep->bindValue(':idRestaurant', $idRestaurant);
    $prep->execute();
    return $prep->fetch(PDO::FETCH_NAMED);
}

function getAvis(int $idRestaurant) : iterable {
    $pdo = getConnexion();
    $requete = 'SELECT auteur, note, commentaire FROM Avis WHERE idRestaurant=:idRestaurant;';
    $prep = $pdo->prepare($requete);
    $prep->bindValue(':idRestaurant', $idRestaurant);
    $prep->execute();
    return $prep->fetchAll(PDO::FETCH_NAMED);
}