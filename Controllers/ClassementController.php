<?php
require_once 'Views/Classement.php';
$model = new ClassementModel();

function displayClassement() {
    global $model;

    $classement = $model->getClassement();

    ob_start();
    include '../Views/classement.php';
    $content = ob_get_clean();
 include '../Views/layout.php';
}
?>