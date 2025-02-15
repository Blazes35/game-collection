<link rel="stylesheet" href="/Assets/CSS/AddGame.css"> </link>
<?php
$Title = "Ajouter un jeu à sa bibliothèque";
ob_start();
?>

<h1>Ajouter un jeu à sa bibliothèque</h1>
<form ction='/WithoutForm' method='post' class="add-game-form">
    <input type="text" name="nom" class='input-field' placeholder="Rechercher un jeu">
    <button type="submit" name="game" class='btn' >RECHERCHER</button>
</form>
<div class="ExistePas">
    <p>Le jeu n'existe pas ?</p>
    <button type="submit" name="createGame" class="btn" onclick="window.location.href='/Form';" >Créer le jeu</button>
</div>
<div class="game-list">
        <?php foreach ($games as $game): ?>
            <div class="card" style="background-image: url('<?=$game['image_url']?>');">
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($game['nom']) ?></h3>
                    <p class="card-text"><?= htmlspecialchars($game['description']) ?></p>
                    <p class="card-text"><?= htmlspecialchars($game['plateforme']) ?></p>
                    <form action='/WithoutForm' method='post'>
                        <input type='hidden' name='gameId' value='<?= htmlspecialchars($game['id']) ?>'>
                        <button type='submit' class='btn'>Ajouter à ma bibliothèque</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
</div>


<?php
$content = ob_get_clean();
include 'Layout.php';
