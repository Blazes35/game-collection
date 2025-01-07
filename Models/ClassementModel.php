<?php
require_once 'DBModel.php';

class ClassementModel extends DBModel {
    public function getClassement() {
        $stmt = $this->getDB()->prepare("
            SELECT 
                utilisateur.prenom, 
                utilisateur.nom, 
                jeu.nom AS nom_jeu, 
                ROUND(utilisateur_jeu.temps_de_jeu / 60, 2) AS total_heures
            FROM utilisateur
            JOIN utilisateur_jeu 
                ON utilisateur.id = utilisateur_jeu.id
            JOIN jeu 
                ON utilisateur_jeu.id = jeu.id
            ORDER BY utilisateur_jeu.temps_de_jeu DESC;
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>