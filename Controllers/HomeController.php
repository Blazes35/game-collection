<?php
require_once 'Models/HomeModel.php';


$playerId = $_SESSION['id'];

$model = new HomeModel();
$playerData = $model->getPlayerData($playerId);
$playerGames = $model->getPlayerGames($playerId);



require 'Views/Home.php';
?>