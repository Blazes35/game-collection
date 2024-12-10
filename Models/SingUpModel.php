<?php
class SingUpModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function insertuser($nom, $prenom, $email, $password) {
        $stmt = self::$db->prepare("INSERT INTO UTILISATEUR (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)");
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
?>