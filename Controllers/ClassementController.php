<?php
require_once 'Views/Classement.php';
$model = new ClassementModel();

function displayClassement() {
    global $model;

    $classement = $model->getClassement();

    // Debug : Vérifier les données avant d'inclure la vue
    var_dump($classement);
    die();

    ob_start();
    include '../Views/classement.php';
    $content = ob_get_clean();

    include '../Views/layout.php';
}

 include '../Views/layout.php';
?>