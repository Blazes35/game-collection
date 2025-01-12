<?php
require_once 'Models/ClassementModel.php';
$model = new ClassementModel();

function cumulerTempsDeJeu($model,$joueurId) {
    echo 'cumulerTempsDeJeu debut';
    $tempsTotal = 0;
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        $tempsTotal += $partie['temps_de_jeu'];
    }
    return $tempsTotal;
}
function jeuLePlusJoue($model,$joueurId) {
    echo 'jeuLePlusJoue debut';
    $jeuFavori='';
    $tempsDeJeu = 0;
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        if ($partie['temps_de_jeu'] > $tempsDeJeu) {
            $tempsDeJeu = $partie['temps_de_jeu'];
            $jeuFavori = $partie['nom'];
        }
    }
    echo 'jeuLePlusJoue fin';
    return $jeuFavori;
}
$topJoueurs = [];
$classement = $model->getClassement();
foreach ($classement as $joueur) {
    echo'joueur';
    var_dump($joueur);
    $joueurId = $joueur['id'];
    $nom = $joueur['nom'];
    $prenom = $joueur['prenom'];
    $tempsDeJeu = cumulerTempsDeJeu($model,$joueurId);
    echo'cumulerTempsDeJeu';
    var_dump($tempsDeJeu);
    $jeuFavori = jeuLePlusJoue($model,$joueurId);
    var_dump($jeuFavori);
    $topJoueurs[] = [
        'joueur_id' => $joueurId,
        'nom' => $nom,
        'prenom' => $prenom,
        'temps_de_jeu' => $tempsDeJeu,
        'jeu_favori' => $jeuFavori
    ];
    usort($topJoueurs, function($a, $b) {
        return $b['temps_de_jeu'] - $a['temps_de_jeu'];
    });
}
var_dump($topJoueurs);
include 'Views/Classement.php';
?>