<?php
require_once('Models/DBModel.php');
class ModifierProfilModel extends DBModel{
    public function __construct() {
        parent::__construct();
    }

    public function selectuser($id) {
        $stmt = self::$db->prepare("SELECT * FROM utilisateur WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateuser($id, $nom, $prenom, $email, $password) {
        $stmt = self::$db->prepare("UPDATE utilisateur SET nom = :nom, prenom = :prenom, email = :email, password = :password WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
?>