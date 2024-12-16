<?php
require_once('../Models/SingUpModel.php');
$model = new SingUpModel();
echo "ok";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {
        echo "ok";
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
        var_dump($nom,$prenom,$email,$password,$confirmpassword);
        if ($password == $confirmpassword) {
            $user = $model->selectemail($email);
            if (!$user) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $insert = $model->insertuser($nom, $prenom, $email, $password);
                if ($insert) {
                    header('Location: index.php');
                    exit();
                } else {
                    $error = "Erreur lors de l'inscription";
                }
            } else {
                $error = "Email déjà utilisé";
            }
        } else {
            $error = "Les mots de passe ne correspondent pas";
        }
    }
}
require_once('../Views/SingUp.php');
?>