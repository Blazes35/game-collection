
<main>
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
</main>
