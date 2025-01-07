<?php
require_once('Models/DBModel.php');
class ProfilModel extends BDModel{
    public function __construct(){
        parent::__construct();
    }

    public function selectuser($id){
        $stmt = self::$db->prepare("SELECT * FROM utilisateur WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>