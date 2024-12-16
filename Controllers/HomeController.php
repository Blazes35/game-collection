<?php
require_once '../Models/HomeModel.php';

$model = new HomeModel();

   
        $playerData = $model->getPlayerData(1);
        $playerGames = $model->getPlayerGames(1);

        // Capture le contenu de home.php dans une variable
        ob_start();
        include '../Views/home.php';
        $content = ob_get_clean();

        // Inclure le layout avec le contenu
        include '../Views/layout.php';



        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Traitement des données POST
            $playerId = isset($_POST['player_id']) ? (int)$_POST['player_id'] : null;

            if ($playerId) {
                $this->displayHome($playerId);
            } else {
                echo "ID du joueur non fourni.";
            }
        }

    displayHome(1);


?>