<?php
$title = "Modifier Profil";
ob_start();
?>
<link rel="stylesheet" href="Assets/CSS/ModifierProfil.css">
<body>
    <div class="modifierprofil">
        <div class="titre">
            <h1>Modifier mon profil</h1>
        </div>
        <div class="formulaire">
            <form action="" method="post">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value="<?php echo $user['nom']; ?>" required>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" value="<?php echo $user['prenom']; ?>" required>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>
                <label for="confirmpassword">Confirmation du mot de passe :</label>
                <input type="password" name="confirmpassword" id="confirmpassword" required>
                <input type="submit" value="Modifier">
            </form>
        </div>
        <form method="post">
            <div class="supprimer">
                <button type="submit" name="supprimer">
                SUPPRIMER MON COMPTE
                </button>
            </div>
            <div class="deconnexion">
                <button type="submit" name="deconnexion">
                DECONNEXION
                </button>
            </div>
        </form>
    </div>
</body>

<?php
    $content = ob_get_clean();
    include 'Layout.php';
?>