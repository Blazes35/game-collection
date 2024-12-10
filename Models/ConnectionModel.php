<?php

class ConnectionModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function selectemail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM UTILISATEUR WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>