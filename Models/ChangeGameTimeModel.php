<?php
require_once ('Models/DBModel.php');

class ChangeGameTimeModel extends DBModel{
    public function __construct(){
        parent::__construct();
    }

    public function getGame($gameId){
        $query = "SELECT * FROM jeu WHERE id = :id";
        $stmt = self::$db->prepare($query);
        $stmt->bindParam(':id', $gameId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function changeTime($userId, $gameId, $tempsJeu){
        $query = "UPDATE utilisateur_jeu SET temps_de_jeu = :temps_jeu WHERE utilisateur_id = :utilisateur_id AND jeu_id = :jeu_id";
        $stmt = self::$db->prepare($query);
        $stmt->bindParam(':temps_jeu', $tempsJeu);
        $stmt->bindParam(':utilisateur_id', $userId);
        $stmt->bindParam(':jeu_id', $gameId);
        $stmt->execute();
    }
}
