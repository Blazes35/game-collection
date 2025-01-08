<?php
require_once('Models/ModifierProfilModel.php');
$modele = new ModifierProfilModel();

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $user = $modele->selectuser($id);
}
require_once('Views/ModifierProfil.php');
?>