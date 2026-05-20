<?php
require_once 'Personne.php';
require_once 'KameHameHaTrait.php';
class Saien extends Personne
{
    use KameHameHaTrait;

    /**
     * @param string $name
     */
    public function __construct(? string $name="Vegeta")
    {
        parent::setName($name);
    }




}