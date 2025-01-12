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
$page = $_POST['page'] ?? isset($_GET['page']) && $_GET['page'] != '' ? $_GET['page'] : '';

switch ($page) {
    case 'index.php':
    case 'Home':
        include 'Controllers/HomeController.php';
        break;
    case 'Form':
        include 'Controllers/FormController.php';
        break;
    case 'WithoutForm':
        !isset($_SESSION['id']) ? include 'Controllers/ConnectionController.php' : include 'Controllers/AddGameWithoutForm.php';
        break;
    case 'SignUp':
        include 'Controllers/SignUpController.php';
        break;
    case 'Connection':
        include 'Controllers/ConnectionController.php';
        break;
    case 'Classement':
        include 'Controllers/ClassementController.php';
        break;
    case 'Profil':
        !isset($_SESSION['id']) ? include 'Controllers/ConnectionController.php' : include 'Controllers/ProfilController.php';
        break;
    case 'ModifierProfil':
        include 'Controllers/ModifierProfilController.php';
        break;
    case 'GameDetail':
        !isset($_SESSION['id']) ? include 'Controllers/ConnectionController.php' : include 'Controllers/GameDetailController.php';
        break;
    case 'Bibliotheque' :
        include 'Controllers/BibliothequeController.php';
    default:
        include 'Views/Error404.php';
        break;
}

