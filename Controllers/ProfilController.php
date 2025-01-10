<?php
require_once('Models/ProfilModel.php');
$modele = new ProfilModel();
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $user = $modele->selectuser($id);
}

if(isset($_POST['deconnexion'])){
    session_destroy();
    header('Location: /');
}

if(isset($_POST['supprimer'])){
    $stmt = $modele->deleteuser($id);
    session_destroy();
    if($stmt){
        header('Location: /');
    }
    else echo "La suppression a échoué";
}
require_once('Views/Profil.php');
?>