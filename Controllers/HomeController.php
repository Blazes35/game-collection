<?php
require_once '../Models/HomeModel.php';

$model = new HomeModel();

if (!isset($_SESSION['user_id'])) {
    // L'utilisateur n'est pas connecté
    $content = '<p>Vous n\'êtes pas connecté.</p>';
    $content .= '<a href="login.php"><button>Se connecter</button></a>';
} else {
    // L'utilisateur est connecté
    $playerData = $this->model->getPlayerData($playerId);
    $playerGames = $this->model->getPlayerGames($playerId);

    // Capture le contenu de home.php dans une variable
    ob_start();
    include '../Views/home.php';
    $content = ob_get_clean();
}

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