<?php
require_once 'Models/FormModel.php';
$model = new FormModel();

var_dump($_POST);

$gameName= $_POST['game'] ?? '' ;
$gameList = $model->getGames($gameName);

$gameDiv = "<div class='container'>";
foreach ($gameList as $game){
    $gameDiv .= "<div class='card' style='width: 18rem;'>
    <div class='card-body'>
        <h5 class='card-title'>".$game['nom']."</h5>
        <p class='card-text'>".$game['description']."</p>
        <img src='".$game['image_url']."'>
        <form action='/WithoutForm' method='post'>
            <input type='hidden' name='page' value='Form'>
            <input type='hidden' name='game' value='".$game['nom']."'>
            <button type='submit'>Ajouter à ma bibliothèque</button>
        </form>
    </div>
  </div>";

}
require 'Views/AddGameWithoutForm.php';