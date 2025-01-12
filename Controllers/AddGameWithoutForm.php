<?php
require_once 'Models/FormModel.php';
$model = new FormModel();

$gameName= $_POST['nom'] ?? '' ;
$games = $model->getGames($gameName);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addGame'])) {
        $model->insertUserGame($_SESSION['id'], $_POST['addGame']);
        $_SESSION['gameId'] = $_POST['addGame'];
        header('Location: /GameDetail');
    }
}


require 'Views/AddGameWithoutForm.php';