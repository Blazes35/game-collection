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
require '.db.php';

// routage
$page = $_POST['page'] ?? isset($_GET['page']) && $_GET['page'] != '' ? $_GET['page'] : 'WithoutForm';
switch ($page) {
    case 'Home':
        include 'Controllers/HomeController.php';
        break;
    case 'WithoutForm':
        include 'Controllers/AddGameWithoutForm.php';
        break;
    case 'SignUp':
        include 'Controllers/SignUpController.php';
        break;
        case 'Connection':
            include 'Controllers/ConnectionController.php';
        break;
    default:
        include 'Views/Error404.php';
        break;
}
