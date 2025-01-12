<?php
require_once 'Models/GameDetailModel.php';
$model = new GameDetailModel();

$gameId = $_POST['gameId'] ?? $_SESSION['gameId'];
$game = $model->getGame($gameId);
$gameName = $game['nom'];
$gameImage = $game['image_url'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['temps_de_jeu'])){
        $model->changeTime($_SESSION['id'], $gameId, $_POST['temps_de_jeu']);
        header('Location: /');
        exit();
    }else if(isset($_POST['delete'])){
        $model->deleteGame($_SESSION['id'], $gameId);
        header('Location: /Bibliotheque');
        exit();
    }
}

require 'Views/GameDetailView.php';
?>