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

    $page = $isset($_POST) && $_POST["page"] != "" ? $_POST["page"]: "Home" ;
switch ($page) {
    case 'Home':
        include 'Controllers/HomeController.php';
        break;
    case 'Form':
        include 'Controllers/FormController.php';
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
    case 'Classement':
        include 'Controllers/ClassementController.php';
    break;
    case 'Profil':
        isset($_SESSION['id']) ? include 'Controllers/ProfilController.php' : include 'Controllers/ConnectionController.php';
    break;
    case 'ModifierProfil':
        include 'Controllers/ModifierProfilController.php';
    break;
    default:
        include 'Views/Error404.php';
        break;
}
