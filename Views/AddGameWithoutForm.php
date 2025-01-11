<link rel="stylesheet" href="/Assets/CSS/AddGame.css"> </link>
<?php
$Title = "Ajouter un jeu à sa bibliothèque";
ob_start();
?>

<h1>Ajouter un jeu à sa bibliothèque</h1>
<form ction='/WithoutForm' method='post'>
    <input type="text" name="nom">
    <button type="submit" name="addGame" >Ajouter</button>
</form>
<p>Le jeu n'existe pas ?</p>
<button type="submit" name="createGame" onclick="window.location.href='/Form';" >Créer le jeu</button>
<div class="game-list">
        <?php foreach ($games as $game): ?>
            <div class="card" style="background-image: url('<?= htmlspecialchars($game['image_url']) ?>');">
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($game['nom']) ?></h3>
                    <p class="card-text"><?= htmlspecialchars($game['description']) ?></p>
                    <p class="card-text"><?= htmlspecialchars($game['plateforme']) ?></p>
                </div>
            </div>
            <form action='/WithoutForm' method='post'>
                <input type='hidden' name='page' value='Form'>
                <input type='hidden' name='addGame' value='<?= htmlspecialchars($game['id']) ?>'>
                <button type='submit'>Ajouter à ma bibliothèque</button>
            </form>
        <?php endforeach; ?>
    

</div>


<?php
$content = ob_get_clean();
include 'Layout.php';
