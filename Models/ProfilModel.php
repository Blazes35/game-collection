<?php
require_once('Models/DBModel.php');
class ProfilModel extends DBModel {
    public function __construct() {
        parent::__construct();
    }

    public function selectuser($id) {
        $stmt = self::$db->prepare("SELECT * FROM utilisateur WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteuser($id) {
        $stmt = self::$db->prepare("DELETE FROM utilisateur WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        return $stmt->execute();
    }
}

?>