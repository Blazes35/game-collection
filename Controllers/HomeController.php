<?php
require_once 'HomeModel.php';

class HomeController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function displayHome($playerId) {
        $playerData = $this->model->getPlayerData($playerId);
        $playerGames = $this->model->getPlayerGames($playerId);

        include 'home.php';
    }

    public function handlePostRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Traitement des données POST
            $playerId = isset($_POST['player_id']) ? (int)$_POST['player_id'] : null;

            if ($playerId) {
                $this->displayHome($playerId);
            } else {
                echo "ID du joueur non fourni.";
            }
        }
    }
}
?>