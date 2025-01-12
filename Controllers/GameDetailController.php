<?php
require_once 'Models/GameDetailModel.php';
$model = new GameDetailModel();

$gameId = $_SESSION['gameId'];
$game = $model->getGame($gameId);
var_dump($game);
$gameName = $game['nom'];

require 'Views/GameDetailView.php';
?>