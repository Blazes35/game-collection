<?php
require_once 'Models/FormModel.php';
$model = new FormModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addGame'])) {
        $model->insertUserGame($_SESSION['id'], $_POST['addGame']);
    }
}

$gameName= $_POST['game'] ?? '' ;
$games = $model->getGames($gameName);
var_dump($_POST['game']);
var_dump($gameName);

require 'Views/AddGameWithoutForm.php';