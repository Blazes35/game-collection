<?php
  ob_start();  
?>
<link rel="stylesheet" href="/Assets/CSS/Home.css">
<?php
if (isset($playerData) && isset($playerGames)) {
    $playerName = $playerData['prenom'] . ' ' . $playerData['nom'];
    $games = $playerGames;

    echo "<div class='home-header'>";
    echo "<h2 class='Bonjour'>SALUT  $playerName !</h2>";
    echo "<h2 class='Bonjour'>PRÊT À AJOUTER DES JEUX À TA COLLECTION ?</h2>";
    echo "<h3 class='Vos-jeux'>VOICI VOS JEUX :</h3>";
    echo "</div>"?>
    <div class="game-list">
    <?php foreach ($games as $game): ?>
        <div class="card" style="background-image: url('<?= $game['image_url'] ?>');">
            <div class="card-body">
                <h3 class="card-title"><?= htmlspecialchars($game['nom']) ?></h3>
                <p class="card-text"><?= htmlspecialchars($game['description']) ?></p>
                <p class="card-text"><?= htmlspecialchars($game['plateforme']) ?></p>
                <p class="card-text"><?= round($game['temps_de_jeu'] / 60, 2) ?> heures de jeu</p>
            </div>
        </div>
    <?php endforeach;?>
</div>
<?php
} else {
  echo "<p>Les données du joueur ne sont pas disponibles.</p>";
}
?>

<?php
  $content = ob_get_clean();
  include 'Layout.php';
?>