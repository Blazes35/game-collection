<?php
require_once 'Models/FormModel.php';
$model = new FormModel();
$gameList = $model->getGames("");
$gameDiv = "<div class='container'>";

foreach ($gameList as $game){
    $gameDiv .= "<div class='card' style='width: 18rem;'>
    <img src='".$game['image_url']."' class='card-img-top' alt='...'>
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