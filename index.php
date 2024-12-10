<?php
session_name('game-collection');
session_set_cookie_params(86400 * 30, "/");
session_start();

// routage
$page = $_POST['page'] ?? isset($_GET['page']) && $_GET['page'] != '' ? $_GET['page'] : 'WithoutForm';
switch ($page) {
    case 'Home':
        include '';
        break;
    case 'WithoutForm':
        include 'Controllers/AddGameWithoutForm.php';
        break;
    default:
        include './Views/Error404.php';
        break;
}