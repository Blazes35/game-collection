<?php
require_once('Models/ModifierProfilModel.php');
$model = new ModifierProfilModel();

if(isset($_SESSION['id'])){
    $user = $model->selectuser($_SESSION['id']);
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['confirmpassword'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        
        
        if($_POST['password'] != $_POST['confirmpassword']){
            echo "<div class= 'errorpassword'>Les mots de passe ne correspondent pas</div>";
        }else{
            $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
            $model->updateuser($_SESSION['id'], $nom, $prenom, $email, $password);
            $_SESSION['email'] = $email;
            $_SESSION['prenom'] = $prenom;
            header('Location: ?page=Profil');
        }
        
        
    }
}


if(isset($_POST['deconnexion'])){
    session_destroy();
    header('Location: ?page=Home');
}

if(isset($_POST['supprimer'])){
    $stmt = $modele->deleteuser($id);
    session_destroy();
    if($stmt){
        header('Location: ?page=Home');
    }
    else echo "La suppression a échoué";
}

require_once('Views/ModifierProfil.php');
?>