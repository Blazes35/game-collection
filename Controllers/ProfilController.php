<?php
require_once('Models/ProfilModel.php');
$model = new ProfilModel();

function getnom(){
    $user = $model->selectuser($_SESSION['id']);
    return $user['nom'];
}

function getprenom(){
    $user = $model->selectuser($_SESSION['id']);
    return $user['prenom'];
}

function getemail(){
    $user = $model->selectuser($_SESSION['id']);
    return $user['email'];
}
?>