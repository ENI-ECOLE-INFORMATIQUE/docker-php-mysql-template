<?php
namespace Framework\Controleur;

abstract class Controleur {
    public function executer(string $ctrl, string $action) {
        $parmetres = $this->$action();
        $vue = new \Framework\Vue\Vue($ctrl, $action);
        $vue->afficher($parmetres);
    }

    public abstract function index();
}