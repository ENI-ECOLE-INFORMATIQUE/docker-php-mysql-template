<?php
declare(strict_types=1);

// Définition d'une classe destinée à stocker des informations 
// sur un utilisateur.
class Utilisateur {

    // Définition des attributs.
    private string $nom; // nom de l'utilisateur
    private string $prenom; // prénom de l'utilisateur

    // Définition des méthodes :
    // - méthode constructeur
    public function __construct(string $prenom, string $nom) {
        // Initialiser le nom et le prénom
        // avec les valeurs passées en paramètre.
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    // - méthode destructeur
    public function __destruct() {
        // Se contente d'afficher un message.
        echo '<div><em>Suppression de ' . $this->nom . '</em></div>';
    }

    // - méthode qui donne des informations sur l'utilisateur
    public function informations() : string {
        return 'Nom : ' . $this->nom . '<br>Prénom : ' . $this->prenom . '<br>';
    }

    // - méthode de conversion de l'objet en chaîne
    public function __toString() : string {
        // Retourne juste le nom et le prénom.
        return strtolower($this->prenom) . ' ' . mb_convert_case($this->nom, MB_CASE_TITLE, 'UTF-8');
    }
}
