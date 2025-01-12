<link rel="stylesheet" href="/Assets/CSS/GameDetail.css"> </link>
<?php
$Title = "Changer la durée de jeu";
ob_start();
?>

<h1>Changer la durée de jeu</h1>
<h3 class="card-title"><?php echo $gameName ?></h3>
<div class="card" style="background-image: url('<?=$gameImage?>');">
</div>
<form action='/ChangeDetail' method='post' class="add-game-form">
    <input type="number" name="temps_de_jeu" class='input-field' placeholder="Temps de jeu">
    <input type="hidden" name="gameId" value="<?=$gameId?>">
    <button type="submit" class='btn' >Valider</button>
</form>
<form action='/ChangeDetail' method="post" class="add-game-form">
    <input type="hidden" name="gameId" value="<?=$gameId?>">
    <button type="submit" name='delete' class='btn'>Supprimer</button>
</form>

<?php
$content = ob_get_clean();
include 'Layout.php';
?>