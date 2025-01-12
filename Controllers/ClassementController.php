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
    $jeux[] = [
        'jeu' => '',
        'temps_de_jeu' => 0
    ];
    $parties = $model->getPartiesByJoueur($joueurId);
    foreach ($parties as $partie) {
        if($jeux['temps_de_jeu'] < $partie['temps_de_jeu']) {
            $jeux['temps_de_jeu'] = $partie['temps_de_jeu'];
            $jeux['jeu'] = $partie['nom'];
        }
    }
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