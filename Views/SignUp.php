<?php
  $title = "Inscription";
  ob_start();
?>
<link rel="stylesheet" href="../Assets/CSS/SignUp.css">
<body>
    <div class="singup">
        <div class="titre">
            <h1>Inscription</h1>
        </div>
        <div class="formulaire">
            <form action="" method="post">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" required>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>
                <label for="confirmpassword">Confirmation du mot de passe :</label>
                <input type="password" name="confirmpassword" id="confirmpassword" required>
                <input type="submit" value="S'inscrire">
                <a href="index.php?action=connection">Se connecter</a>
            </form>
        </div>
    </div>
</body>
<?php
  $content = ob_get_clean();
  include 'Layout.php';
?>