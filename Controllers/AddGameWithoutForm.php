<?php
require_once 'Models/FormModel.php';
$model = new FormModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addGame'])) {
        $model->insertUserGame($_SESSION['id'], $_POST['addGame']);
    }
}

$gameName= $_POST['game'] ?? '' ;
$gameList = $model->getGames($gameName);


require 'Views/AddGameWithoutForm.php';