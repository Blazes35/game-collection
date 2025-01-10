<?php
  ob_start();  
?>
<link rel="stylesheet" href="CSS/Home.css">
<?php
if (isset($playerData) && isset($playerGames)) {
    $playerName = $playerData['prenom'] . ' ' . $playerData['nom'];
    $games = $playerGames;

    echo "<h2>Bonjour, $playerName !</h2>";
    echo "<h3>Voici vos jeux :</h3>";
    echo "<ul>";
    foreach ($games as $game) {
        $gameName = $game['nom'];
        $gameImage = $game['image_url'];
        $gamePlatform = $game['plateforme'];
        $gameHours = round($game['temps_de_jeu'] / 60, 2); // Convertir les minutes en heures

        echo "<li>";
        echo "<img src='$gameImage' alt='$gameName' style='width:100px;height:100px;'>";
        echo "<strong>$gameName</strong> sur $gamePlatform - $gameHours heures de jeu";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Les données du joueur ne sont pas disponibles.</p>";
}
?>

<?php
  $content = ob_get_clean();
  include 'Layout.php';
?>