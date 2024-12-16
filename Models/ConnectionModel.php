<?php

require_once('../Models/DBModel.php');
class ConnectionModel extends DBModel {
    public function __construct() {
        parent::__construct();
    }

    public function selectemail($email) {
        $stmt = self::$db->prepare("SELECT * FROM UTILISATEUR WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>