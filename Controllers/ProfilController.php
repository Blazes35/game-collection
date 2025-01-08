<?php
require_once('Models/ProfilModel.php');
$modele = new ProfilModel();
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $user = $modele->selectuser($id);
}
require_once('Views/Profil.php');
?>