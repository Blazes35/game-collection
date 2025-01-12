<link rel="stylesheet" href="/Assets/CSS/AddGame.css"> </link>
<?php
$Title = "Changer durée de jeu";
ob_start();
?>

<?php echo $_SESSION['gameId'] ?>
<h1>Changer durée de jeu</h1>


<div class="card" style="background-image: url('<?=$gameImage?>');">
    <div class="card-body">
        <h3 class="card-title"><?php echo $gameName ?></h3>
        <form action='/GameDetail' method='post' class="add-game-form">
            <input type="number" name="temps_de_jeu" class='input-field' placeholder="Temps de jeu">
            <button type="submit" class='btn' >Valider</button>
        </form>
    </div>
</div>
<?php
$content = ob_get_clean();
include 'Layout.php';
?>