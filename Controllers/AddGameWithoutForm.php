<?php
require_once 'Models/FormModel.php';
$model = new FormModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addGame'])) {
        $model->insertUserGame($_SESSION['id'], $_POST['addGame']);
        $_SESSION['gameId'] = $_POST['addGame'];
        header('Location: /GameDetail');
    }
}

$gameName= $_POST['nom'] ?? '' ;
$games = $model->getGames($gameName);


require 'Views/AddGameWithoutForm.php';