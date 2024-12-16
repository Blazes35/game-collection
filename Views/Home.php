<?php
// Supposons que les données du joueur et ses jeux soient passés par le contrôleur
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
    echo "<p>Vous n'etes pas connécté</p>";}
?>

<!-- Formulaire pour envoyer une requête POST -->
<form action="Login.php" method="get">
    <button type="submit">Retour à la page de connexion</button>
</form>