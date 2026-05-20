<?php
namespace Controleur;

abstract class Controleur {
    public function executer(string $ctrl, string $action) {
        $parmetres = $this->$action();
        $vue = new \Vue\Vue($ctrl, $action);
        $vue->afficher($parmetres);
    }

    public abstract function index();
}