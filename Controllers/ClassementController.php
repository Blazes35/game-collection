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
    echo 'cumulerTempsDeJeu fin';
    return $tempsTotal;
}
function jeuLePlusJoue($joueurId) {
    echo 'jeuLePlusJoue debut';
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
    echo 'jeuLePlusJoue fin';
    return key($jeux);
}
$topJoueurs = [];
$classement = $model->getClassement();
foreach ($classement as $joueur) {
    $joueurId = $joueur['id'];
    $nom = $joueur['nom'];
    $prenom = $joueur['prenom'];
    $tempsDeJeu = cumulerTempsDeJeu($joueurId);
    var_dump($tempsDeJeu);
    $jeuFavori = jeuLePlusJoue($joueurId);
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