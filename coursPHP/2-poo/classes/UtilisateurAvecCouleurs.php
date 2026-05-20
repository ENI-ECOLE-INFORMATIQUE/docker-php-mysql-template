<?php
declare(strict_types=1);

require_once 'Utilisateur.php';

// Définition d'une classe qui hérite de la classe Utilisateur
class UtilisateurAvecCouleurs extends Utilisateur {

    // Définition des attributs complémentaires.
    private array $couleurs; // couleurs préférées de l'utilisateur

    // Définition des méthodes complémentaires
    // - méthode constructeur

    public function __construct(string $prenom, string $nom, string $couleurs) {
        // Appel au constructeur de la classe parent
        // pour la première partie de l'initialisation.
        parent::__construct($prenom, $nom);
        // Initialisation spécifique complémentaire.
        $this->couleurs = explode(',', $couleurs);
    }

    // - liste des couleurs préférées de l’utilisateur
    public function couleurs() : string {
        return implode('-', $this->couleurs);
    }

    // - redéfinition de méthodes existantes
    public function informations() : string {
        return parent::informations() . 'Couleurs : ' . $this->couleurs() . '<br>';
    }
}
