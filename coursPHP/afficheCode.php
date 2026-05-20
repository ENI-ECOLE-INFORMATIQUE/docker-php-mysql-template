<?php
function afficheCode($parametres) {
    $fichiers = $parametres['fichiers']??[];
    $nomFichier = $parametres['nomFichier']??false;
    $execution = $parametres['execution']??false;
    $correction = $parametres['correction']??false;
    $commentaires = $parametres['commentaires']??null;
    $nomCom = $parametres['nomCom']??'Commentaires';
    $return = $parametres['return']??null;
    $trunc = $parametres['trunc']??0;
    $iframe = $parametres['iframe']??false;

    $kOk = ['fichiers', 'nomFichier', 'execution', 'correction', 'commentaires', 'nomCom', 'return', 'trunc', 'iframe'];
    foreach ($parametres as $k => $v) {
        if(array_search($k, $kOk, true) === false)
            die('<h1>ERREUR ! ERREUR ! ERREUR ! ERREUR ! ERREUR !  : '.$k.'</h1>');
    }
    require 'afficheCode2.php';
}