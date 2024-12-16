<?php
require_once('../Models/SignUpModel.php');
$model = new SignUpModel(); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
        if ($password == $confirmpassword) {
            $user = $model->selectemail($email);
            if (!$user) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $insert = $model->insertuser($nom, $prenom, $email, $password);
                if ($insert) {
                    header('Location: index.php');
                    exit();
                } 
            }
        } 
    }
}
require_once('../Views/SignUp.php');
?>