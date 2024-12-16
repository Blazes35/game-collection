<?php
session_name('game-collection');
session_set_cookie_params(86400 * 30, "/");
session_start();
// Load dependencies
require 'vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Load database
require 'db.php';

try {
    $pdo = init_database();
    echo 'Bravo ! Vous avez réussi a déployer votre application !';
} catch (PDOException $e) {
    echo 'Attention ! Erreur de connexion à la base de données : ' . $e->getMessage();
}


// routage
/*$page = $_POST['page'] ?? isset($_GET['page']) && $_GET['page'] != '' ? $_GET['page'] : 'Home';
switch ($page) {
    case 'Home':
        include './Controllers/HomeController.php';
        break;
    case 'WithoutForm':
        include 'Controllers/AddGameWithoutForm.php';
        break;
    case 'SignUp':
        include './Controllers/SignUpController.php';
        break;
        case 'Connection':
            include './Controllers/ConnectionController.php';
        break;
    default:
        include './Views/Error404.php';
        break;

}*/