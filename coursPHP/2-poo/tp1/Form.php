<?php
declare(strict_types=1);

class Form {

    protected string $formulaire;

    public function __construct(string $nom, string $action, string $methode = 'POST') {
        $this->formulaire = '<form action="' . $action . '" method="' .
                $methode . '"><fieldset><legend>' . $nom . '</legend>';
    }

    public function setText(string $label, string $nom) : self {
        $this->formulaire .= '<label for="' . $nom . '">' . $label . ' : </label>' .
                             '<input id="' . $nom . '" name="' . $nom . '"><br>';
        return $this;
    }

    public function setSubmit(string $nom) : self {
        $this->formulaire .= '<input type="submit" name="' . $nom . '" value="' . $nom . '">';
        return $this;
    }
    
    public function getForm() : string {
        return $this->formulaire . '</fieldset></form>';
    }
}
