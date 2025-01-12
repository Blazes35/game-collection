<?php
require_once 'Models/GameDetailModel.php';
$model = new GameDetailModel();

$gameId = $_SESSION['gameId'];
$game = $model->getGame($gameId);
var_dump($game);
$gameName = $game[0]['nom'];

require 'Views/GameDetailView.php';
?>