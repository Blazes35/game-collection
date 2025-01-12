<?php
require_once 'Models/ClassementModel.php';
$model = new ClassementModel();
$compte=0;

$classement = $model->getClassement();
include 'Views/Classement.php';
?>