<?php
require_once 'Personne.php';
trait KameHameHaTrait
{
    public function lancerKameHameHa(Personne $personne)
    {
        echo $personne->getName()." envoie un KameHameHa.<br>";
    }
}