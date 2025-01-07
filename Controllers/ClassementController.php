<?php
require_once 'Views/Classement.php';
$model = new ClassementModel();



$classement = $model->getClassement();
include '../Views/classement.php';

?>