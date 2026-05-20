<?php
declare(strict_types=1);

require_once 'Personne.php';

class Electeur extends Personne {

    private bool $vote;

    public function aVote() {
        $this->vote = true;
    }

    public function __construct(string $nom, string $prenom, private int $bureauDeVote) {
        parent::__construct($nom, $prenom);
        $this->vote = false;
    }

    public function __toString() : string {
        return $this->nom . ' ' . $this->prenom .
                ' (Bureau n°' . $this->bureauDeVote . ') ' .
                ($this->vote ? 'a déjà' : 'n\'a pas') . ' voté<br>';
    }

}
