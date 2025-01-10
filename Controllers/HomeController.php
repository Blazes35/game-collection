<?php
require_once 'Models/HomeModel.php';

if (!isset($_SESSION['id'])) {
    // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
    header('Location: index.php?page=Connection');
    exit();
}

$playerId = $_SESSION['id'];

$model = new HomeModel();
$playerData = $model->getPlayerData($playerId);
$playerGames = $model->getPlayerGames($playerId);



require 'Views/Home.php';
?>