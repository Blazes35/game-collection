<?php
require_once('Models/ConnectionManager.php');

isser($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $user = selectemail($email);
        if($user){
            if(password_verify($password, $user['password'])){
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                header('Location: index.php');
            }else{
                $error = "Mot de passe incorrect";
            }
        }else{
            $error = "Email incorrect";
        }
    }
}
    

require_once('Views/Connection.php');
?>