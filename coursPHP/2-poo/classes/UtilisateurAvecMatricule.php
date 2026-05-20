<?php
declare(strict_types=1);

require_once 'Utilisateur.php';

class UtilisateurAvecMatricule extends Utilisateur {
    private static int $nbUtilisateursAvecMatricule = 0;
    
    private int $numeroMatricule;
    
    public function __construct(string $prenom, string $nom) {
        parent::__construct($prenom, $nom);
        static::$nbUtilisateursAvecMatricule++;
        $this->numeroMatricule = static::$nbUtilisateursAvecMatricule;
    }
    
    public function informations() : string {
        return parent::informations() . 'Numéro de matricule : ' . $this->numeroMatricule . '<br>';
    }
    
    public static function nombreDEmpoyesAvecMatricule() : int {
        return static::$nbUtilisateursAvecMatricule;
    }
}
