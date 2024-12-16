<?php
require_once('../Models/DBModel.php');
class SingUpModel extends DBModel {
    public function __construct() {
        parent::__construct();
    }
    public function insertuser($nom, $prenom, $email, $password) {
        $stmt = self::$db->prepare("INSERT INTO UTILISATEUR (prenom, nom, email, password) VALUES (:nom, :prenom, :email, :password)");
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        echo 'ok';
        return $stmt->execute();
    }

    public function selectemail($email) {
        $stmt = self::$db->prepare("SELECT * FROM UTILISATEUR WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function select(){
        $stmt = self::$db->prepare("SELECT * FROM UTILISATEUR");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>