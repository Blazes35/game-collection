<?php
require_once 'Models/ChangeGameTimeModel.php';
$model = new ChangeGameTimeModel();

$gameId = $_SESSION['gameId'];
$game = $model->getGame($gameId);
$gameName = $game['nom'];
$gameImage = $game['image_url'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['temps_de_jeu'])){
        $model->changeTime($_SESSION['id'], $gameId, $_POST['temps_de_jeu']);
        header('Location: /');
        exit();
    }
}

require 'Views/ChangeGameTimeView.php';
?>