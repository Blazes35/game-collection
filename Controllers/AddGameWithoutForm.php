<?php
require_once 'Models/FormModel.php';
$model = new FormModel();
$test = $model->test();
require 'Views/AddGameWithoutForm.php';