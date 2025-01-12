<?php
require_once 'Models/GameDetailModel.php';
$model = new GameDetailModel();

$gameId = $_POST['gameId'];
var_dump($_POST);
echo "||||||| Session :";
var_dump($_SESSION);
$game = $model->getGame($gameId);
var_dump($game);
$gameName = $game['nom'];
$gameImage = $game['image_url'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['temps_de_jeu'])){
        $model->changeTime($_SESSION['id'], $gameId, $_POST['temps_de_jeu']);
        header('Location: /');
        exit();
    }else if(isset($_POST['delete'])){
        $model->deleteGame($_SESSION['id'], $gameId);
        header('Location: /');
        exit();
    }
}

require 'Views/GameDetailView.php';
?>