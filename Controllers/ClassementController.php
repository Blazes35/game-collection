<?php
require_once 'Views/Classement.php';
$model = new ClassementModel();

function displayClassement() {
    global $model;

    $classement = $model->getClassement();

    ob_start();
    include '../Views/classement.php';
}
displyClassement();
?>