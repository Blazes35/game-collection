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
 <div class="container">
     <?php echo $gameDiv; ?>
 </div>

<?php
$content = ob_get_clean();
include 'Layout.php';
