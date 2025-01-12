<?php
require_once 'Models/ClassementModel.php';
$model = new ClassementModel();

function cumulerTempsDeJeu($model,$joueurId) {
    $tempsTotal = 0;
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        $tempsTotal += $partie['temps_de_jeu'];
    }
    $heures = floor($tempsTotal / 60);
    $minutes = $tempsTotal % 60;
    $tempsTotal = sprintf('%d h %d', $heures, $minutes);
    return $tempsTotal;
}
function jeuLePlusJoue($model,$joueurId) {
    $jeuFavori='';
    $tempsDeJeu = 0;
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        if ($partie['temps_de_jeu'] > $tempsDeJeu) {
            $tempsDeJeu = $partie['temps_de_jeu'];
            $jeuFavori = $partie['nom'];
        }
    }
    return $jeuFavori;
}
$topJoueurs = [];
$classement = $model->getClassement();
foreach ($classement as $joueur) {
    if (!in_array($joueur['id'], array_column($topJoueurs, 'joueur_id'))) {
        $joueurId = $joueur['id'];
        $nom = $joueur['nom'];
        $prenom = $joueur['prenom'];
        $tempsDeJeu = cumulerTempsDeJeu($model, $joueurId);
        $jeuFavori = jeuLePlusJoue($model, $joueurId);
        $topJoueurs[] = [
            'joueur_id' => $joueurId,
            'nom' => $nom,
            'prenom' => $prenom,
            'temps_de_jeu' => $tempsDeJeu,
            'jeu_favori' => $jeuFavori
        ];
    }
    }
    
    usort($topJoueurs, function($a, $b) {
        return $b['temps_de_jeu'] - $a['temps_de_jeu'];
    });

include 'Views/Classement.php';
?>