<link rel="stylesheet" href="/Assets/CSS/AddGame.css"> </link>
<?php
$Title = "Changer durée de jeu";
ob_start();
?>

<?php echo $_SESSION['gameId'] ?>
<h1>Changer durée de jeu</h1>
<form action='/GameDetail' method='post' class="add-game-form">
    <p><?php echo $gameName ?></p>
    <input type="number" name="temps_de_jeu" class='input-field' placeholder="Temps de jeu">
    <button type="submit" name="temps_de_jeu" class='btn' >MODIFIER</button>
</form>
<?php
$content = ob_get_clean();
include 'Layout.php';
?>