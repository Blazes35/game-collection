<?php
require_once 'Models/ClassementModel.php';
$model = new ClassementModel();
$compte=0;
function augemnterCompte(){
    $compte++;
    return $compte;
}
$classement = $model->getClassement();
include 'Views/Classement.php';
?>