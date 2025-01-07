<?php
require_once 'Models/ClassementModel.php';
$model = new ClassementModel();

$classement = $model->getClassement();
include 'Views/Classement.php';
?>