<?php
require_once 'Models/GameDetailModel.php';
$model = new GameDetailModel();

$gameId = $_SESSION['gameId'];
$game = $model->getGame($gameId);
var_dump($game);
$gameName = $game['nom'];
$gameImage = $game['image_url'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['temps_de_jeu'])){
        $model->changeTime($_SESSION['id'], $gameId, $_POST['temps_de_jeu']);
        header('Location: /Profil');
        exit();
    }
}

require 'Views/GameDetailView.php';
?>