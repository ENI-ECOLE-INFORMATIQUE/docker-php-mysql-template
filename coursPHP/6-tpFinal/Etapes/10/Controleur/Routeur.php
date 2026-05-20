<?php
namespace Controleur;

class Routeur {
    public function router() {
        try {
            $ctrl = filter_input(INPUT_GET, 'ctrl', FILTER_SANITIZE_SPECIAL_CHARS,
                    ['options' => ['default' => 'Accueil']]);
            $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS,
                    ['options' => ['default' => 'index']]);

            $nomClasseCtrl = '\Controleur\Ctrl' . $ctrl;
            $instCtrl = new $nomClasseCtrl();

            $instCtrl->executer($ctrl, $action);
        } catch(\PDOException $e) {
            $this->afficherErreur('L\'accès aux données a échoué : ' . $e->getMessage());
        } catch(\Exception $e) {
            switch($e->getCode()) {
                case 400 : header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request'); break;
                case 404 : header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found'); break;
            }
            $this->afficherErreur($e->getMessage());
        }
    }
    
    private function afficherErreur(string $msgErreur) {
        $vue = new \Vue\Vue('Erreur', 'index');
        $vue->afficher(['msgErreur' => $msgErreur]);
    }
}