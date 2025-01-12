<?php
require_once 'Models/ClassementModel.php';
$model = new ClassementModel();

$classement = $model->getClassement();
var_dump($classement);
include 'Views/Classement.php';
?>