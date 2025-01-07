<?php
require_once('Models/SignUpModel.php');
$model = new SignUpModel(); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {
        
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
        var_dump($nom, $prenom, $email, $password, $confirmpassword);
        if ($password == $confirmpassword) {
            echo 'mdp';
            $user = $model->selectemail($email);
            var_dump($user);
            if (!$user) {
                echo 'email';
                $password = password_hash($password, PASSWORD_DEFAULT);
                $insert = $model->insertuser($nom, $prenom, $email, $password);
                echo "insert";
                if ($insert) {
                    header('Location: ?page=Connection');
                    exit();
                } 
            }
        } 
    }
}
require_once('Views/SignUp.php');
?>