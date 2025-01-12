<?php
require_once 'Models/ClassementModel.php';
$model = new ClassementModel();
$compte=0;
function cumulerTempsDeJeu($joueurId) {
    $tempsTotal = 0;
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        $tempsTotal += $partie['temps_de_jeu'];
    }
    return $tempsTotal;
}
function jeuLePlusJoue($joueurId) {
    $jeux = [];
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        $jeuId = $partie['jeu_id'];
        if (!isset($jeux[$jeuId])) {
            $jeux[$jeuId] = 0;
        }
        $jeux[$jeuId] += $partie['temps_de_jeu'];
    }
    arsort($jeux);
    return key($jeux);
}

$classement = $model->getClassement();
include 'Views/Classement.php';
?>