<?php
declare(strict_types=1);

class ClasseSimple {

    public function __construct(private int $entier, private string $chaine) {
    }

    public function __toString() {
        return 'Je suis une instance de la classe "ClasseSimple" et ' .
                'j\'ai comme attributs "$entier" qui vaut "' .
                $this->entier . '" et "$chaine" qui vaut "' . $this->chaine . '"<br>';
    }

}

$instance1 = new ClasseSimple(17, 'bonjour');
echo $instance1;
$serial = serialize($instance1);
var_dump($serial);
var_dump(unserialize($serial));
echo unserialize($serial);
