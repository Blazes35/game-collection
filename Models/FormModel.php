<?php
require_once 'DBModel.php';

class FormModel extends DBModel {

    public function __construct() {
        parent::__construct();
    }

    public function insertGame($nom, $editeur, $date_sortie, $plateforme, $description, $image_url, $site_url) {
        $query = "INSERT INTO jeu (nom, editeur, date_sortie, plateforme, description, image_url, site_url) VALUES (:nom, :editeur, :date_sortie, :plateforme, :description, :image_url, :site_url)";
        $stmt = $this->getDB()->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':editeur', $editeur);
        $stmt->bindParam(':date_sortie', $date_sortie);
        $stmt->bindParam(':plateforme', $plateforme);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image_url', $image_url);
        $stmt->bindParam(':site_url', $site_url);
        $stmt->execute();
    }

    public function insertUserGame($userId, $gameName) {
        $query = "INSERT INTO utilisateur_jeu (utilisateur_id, jeu_id, temps_de_jeu) VALUES (:utilisateur_id, :jeu_id, 0)";
        $stmt = $this->getDB()->prepare($query);
        $stmt->bindParam(':utilisateur_id', $userId);
        $stmt->bindParam(':jeu_id', $gameName);
        $stmt->execute();
    }

    public function test(){
        $query = "SELECT * FROM utilisateur_jeu";
        $stmt = $this->getDB()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}