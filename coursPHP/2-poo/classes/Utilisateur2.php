<?php
declare(strict_types=1);

class Utilisateur2 {

    // Définition du constructeur avec déclaration et initialisation des attributs intégrés
    public function __construct(private string $prenom, private string $nom) {
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
