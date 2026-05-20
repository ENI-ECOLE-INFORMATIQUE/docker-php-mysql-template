<?php
require_once 'Form.php';

class Form2 extends Form {
    
    public function setCheckBox($label, $nom) {
        $this->formulaire .= '<input id="' . $nom .'" name="' . $nom .'" type="checkbox">';
        $this->formulaire .= '<label for="' . $nom .'">' . $label .'</label><br>';
    }

    public function setRadioButton($label, $nom, $groupe) {
        $this->formulaire .= '<input id="' . $nom .'" name="' . $groupe .'" value="' . $nom .'" type="radio">';
        $this->formulaire .= '<label for="' . $nom .'">' . $label .'</label><br>';
    }
}
