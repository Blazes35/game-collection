<?php
require_once 'Models/ClassementModel.php';
$model = new ClassementModel();

function cumulerTempsDeJeu($model,$joueurId) {
    $tempsTotal = 0;
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        $tempsTotal += $partie['temps_de_jeu'];
    }
    return $tempsTotal;
}
function jeuLePlusJoue($model,$joueurId) {
    $jeux = [];
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        $jeuId = $partie['jeu_id'];
        if (!isset($jeux[$jeuId])) {
            $jeux[$jeuId] = 0;
        }
        $jeux[$jeuId] += $partie['temps_de_jeu'];
    }
    var_dump($jeux);
    arsort($jeux);
    return key($jeux);
}
$topJoueurs = [];
$classement = $model->getClassement();
foreach ($classement as $joueur) {
    $joueurId = $joueur['id'];
    $nom = $joueur['nom'];
    $prenom = $joueur['prenom'];
    $tempsDeJeu = cumulerTempsDeJeu($model,$joueurId);
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
include 'Views/Classement.php';
?>