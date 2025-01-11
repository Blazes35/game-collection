<?php
require_once 'Models/HomeModel.php';

if (!isset($_SESSION['id'])) {
    header('Location: /Connection');
    exit();
}

$playerId = $_SESSION['id'];

$model = new HomeModel();
$playerData = $model->getPlayerData($playerId);
//$playerGames = $model->getPlayerGames($playerId);




require 'Views/Home.php';
?>