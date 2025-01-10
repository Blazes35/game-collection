<?php
require_once('Models/ConnectionModel.php');
$model = new ConnectionModel();
$erreur = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $user = $model->selectemail($email);
        if($user){
            if(password_verify($password, $user['password'])){
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['prenom'] = $user['prenom'];
                header('Location: /');
            }else{
                $erreur="<div class= 'errormdp'>Mot de passe incorrect</div>";
            }
        }else{
            $erreur="<div class= 'erroremail'>Email incorrect</div>";
        }
    }
}
    

require_once('Views/Connection.php');
?>