<?php
require_once '../Models/HomeModel.php';

$model = new HomeModel();

    $playerData = $model->getPlayerData($playerId);
    $playerGames = $model->getPlayerGames($playerId);


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Traitement des données POST
        $playerId = isset($_POST['player_id']) ? (int)$_POST['player_id'] : null;

        if ($playerId) {
            displayHome($playerId);
        } else {
            echo "ID du joueur non fourni.";
        }
    }

require_once '../Views/Home.php';
?>