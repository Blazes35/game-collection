<?php
  ob_start();  
?>
<link rel="stylesheet" href="/Assets/CSS/Home.css">
<?php
if (isset($playerData) && isset($playerGames)) {
    $playerName = $playerData['prenom'] . ' ' . $playerData['nom'];
    $games = $playerGames;

    echo "<h2>Bonjour, $playerName !</h2>";
    echo "<h3>Voici vos jeux :</h3>";?>
    <div class="game-list">
    <?php foreach ($games as $game): ?>
        <div class="card" style="background-image: url('<?= $game['image_url'] ?>');">
            <div class="card-body">
                <h3 class="card-title"><?= htmlspecialchars($game['nom']) ?></h3>
                <p class="card-text"><?= htmlspecialchars($game['description']) ?></p>
                <p class="card-text"><?= htmlspecialchars($game['plateforme']) ?></p>
                <p class="card-text"><?= round($game['temps_de_jeu'] / 60, 2) ?> heures de jeu</p>
                <form action='/WithoutForm' method='post'>
                    <input type='hidden' name='page' value='Form'>
                    <input type='hidden' name='addGame' value='<?= htmlspecialchars($game['id']) ?>'>
                    <button type='submit' class='btn'>Ajouter à ma bibliothèque</button>
                </form>
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