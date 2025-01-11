<?php
require_once 'Models/FormModel.php';
$model = new FormModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addGame'])) {
        $model->insertUserGame($_SESSION['id'], $_POST['addGame']);
    }
}

$gameName= $_POST['nom'] ?? '' ;
$games = $model->getGames($gameName);
var_dump($_POST['nom']);
var_dump($gameName);

require 'Views/AddGameWithoutForm.php';