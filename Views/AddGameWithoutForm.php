<?php
$Title = "Ajouter un jeu à sa bibliothèque";
ob_start();
?>

<h1>Ajouter un jeu à sa bibliothèque</h1>
 <div class="container">
     <?php echo $gameList
 </div>

<?php
$content = ob_get_clean();
include 'Layout.php';
