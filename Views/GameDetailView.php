<link rel="stylesheet" href="/Assets/CSS/AddGame.css"> </link>
<?php
$Title = "Changer durée de jeu";
ob_start();
?>

<?php echo $_SESSION['gameId'] ?>

<?php
$content = ob_get_clean();
include 'Layout.php';
?>