<?php
require_once 'DBModel.php';

class HomeModel extends DBModel {
    public function getPlayerData($playerId) {
        $stmt = $this->getDB()->prepare("SELECT prenom, nom FROM utilisateur WHERE id = ?");
        $stmt->execute([$playerId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getPlayerGames($playerId) {
        $stmt = $this->getDB()->prepare("
            SELECT jeu.nom, jeu.image_url, jeu.plateforme, utilisateur_jeu.temps_de_jeu 
            FROM jeu 
            JOIN utilisateur_jeu ON jeu.id = utilisateur_jeu.jeu_id
            WHERE utilisateur_jeu.utilisateur_id = utilisateur_id
        ");
        $stmt->execute([$playerId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>