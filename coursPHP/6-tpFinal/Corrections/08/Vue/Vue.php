<?php
class Vue {
    private ?string $titre;

    public function __construct(private string $action) {
        $this->titre = null;
    }

    private function insererDonnees(string $cheminFichier, array $donnees) : string {
        if (!file_exists($cheminFichier)) {
            throw new Exception('Le fichier n\'existe pas !');
        }
        extract($donnees);
        ob_start();
        require $cheminFichier;
        return ob_get_clean();
    }

    public function afficher(array $donnees) {
        $contenu = $this->insererDonnees('Vue/Vue' . mb_convert_case($this->action, MB_CASE_TITLE, 'UTF-8') . '.php', $donnees);
        echo $this->insererDonnees('Vue/gabarit.php', ['titre' => $this->titre, 'contenu' => $contenu]);
    }
}