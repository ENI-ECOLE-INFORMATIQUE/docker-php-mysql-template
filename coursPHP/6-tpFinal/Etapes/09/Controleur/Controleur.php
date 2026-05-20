<?php
require_once 'Vue/Vue.php';

abstract class Controleur {
    public function executer(string $ctrl, string $action) {
        $parmetres = $this->$action();
        $vue = new Vue($ctrl, $action);
        $vue->afficher($parmetres);
    }

    public abstract function index();
}