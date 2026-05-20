<?php

function getConnexion() : PDO {
    $chaineCnx = 'mysql:host=localhost;dbname=Restaurants';
    return new PDO($chaineCnx, 'webUser', '19L_lS9Dl(Hr8Yyl');
}