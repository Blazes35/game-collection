<?php
require_once('Models/DBModel.php');
class ModifierProfilModel extends BDModel{
    public function __construct() {
        parent::__construct();
    }
    public function selectuser($id) {
        $stmt = self::$db->prepare("SELECT * FROM utilisateur WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>