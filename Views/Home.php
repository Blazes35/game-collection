<?php
// Supposons que les données du joueur et ses jeux soient passés par le contrôleur
$playerName = $playerData['prenom'] . ' ' . $playerData['nom'];
$games = $playerGames;

echo "<h2>Bonjour, $playerName !</h2>";
echo "<h3>Voici vos jeux :</h3>";
echo "<ul>";
foreach ($games as $game) {
    echo "<li>$game</li>";
}
echo "</ul>";
?>

<!-- Formulaire pour envoyer une requête POST -->
<form method="POST" action="">
    <label for="player_id">ID du joueur :</label>
    <input type="text" id="player_id" name="player_id" required>
    <button type="submit">Envoyer</button>
</form>