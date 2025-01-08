<?php
require_once('Models/ModifierProfilModel.php');
$model = new ModifierProfilModel();

if(isset($_SESSION['id'])){
    $user = $model->selectuser($_SESSION['id']);
}

require_once('Views/ModifierProfil.php');
?>