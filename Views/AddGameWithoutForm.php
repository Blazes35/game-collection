<?php
$Title = "Ajouter un jeu à sa bibliothèque";
ob_start();
var_dump($test);
?>


 <div class="container">
     <h1>Ajouter un jeu à sa bibliothèque</h1>
 </div>

<?php
$content = ob_get_clean();
include 'Layout.php';
