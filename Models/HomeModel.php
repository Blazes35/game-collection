<?php
require_once 'DBModel.php';

class HomeModel extends DBModel {
    public function getPlayerData($playerId) {
        $stmt = $this->getDB()->prepare("SELECT prenom, nom FROM utilisateur WHERE id = ?");
        $stmt->execute([$playerId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getPlayerGames($playerId) {
        $stmt = self ::$db->prepare("
            SELECT jeu.nom, jeu.image_url, jeu.plateforme, utilisateur_jeu.temps_de_jeu 
            FROM jeu 
            JOIN utilisateur_jeu ON jeu.id = utilisateur_jeu.id 
            WHERE utilisateur_jeu.id = :playerId");
        $stmt->bindParam(':playerId', $playerId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>