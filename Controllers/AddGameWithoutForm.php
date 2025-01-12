<?php
require_once 'Models/FormModel.php';
$model = new FormModel();

$gameName= $_POST['nom'] ?? '' ;
$games = $model->getGames($gameName);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['gameId'])) {
        $_SESSION['gameId'] = $_POST['gameId'];
        $model->insertUserGame($_SESSION['id'], $_POST['gameId']);
        header('Location: /GameDetail');
        exit();
    }
}


require 'Views/AddGameWithoutForm.php';