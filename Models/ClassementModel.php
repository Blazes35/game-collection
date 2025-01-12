<?php
require_once 'DBModel.php';

class ClassementModel extends DBModel {
    public function __construct() {
        parent::__construct();
    }
    
    public function getClassement() {
        $stmt = $this->getDB()->prepare("
            SELECT utilisateur.id, utilisateur.nom,prenom,jeu.nom AS nom_jeu, temps_de_jeu 
            FROM `utilisateur_jeu` JOIN utilisateur ON utilisateur_jeu.utilisateur_id=utilisateur.id JOIN jeu ON utilisateur_jeu.jeu_id=jeu.id 
            ORDER BY temps_de_jeu DESC;
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPartiesByJoueur($joueurId) {
        $stmt = $this->getDB()->prepare("
            SELECT nom,temps_de_jeu
            FROM `utilisateur_jeu` JOIN utilisateur ON utilisateur_jeu.utilisateur_id=utilisateur.id JOIN jeu ON utilisateur_jeu.jeu_id=jeu.id 
            WHERE utilisateur.id = :joueurId;
        ");
        $stmt->bindParam(':joueurId', $joueurId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
