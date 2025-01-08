<?php
$title = "Profil";
ob_start();
?>
<link rel="stylesheet" href="Assets/CSS/Profil.css">
<body>
    <div class="profil">
        <div class="titre">
            <h1>Mon profil</h1>
        </div>
        <div class="nom">
            <p>Nom : <?php echo $user['nom']; ?></p>
        </div>
        <div class="prenom">
            <p>Prénom : <?php echo $user['prenom']; ?></p>
        </div>
        <div class="email">
            <p>Email : <?php echo $user['email']; ?></p>
        </div>
        <div class="modifier">
            <button>
            <a href="?page=ModifierProfil">MODIFIER MON PROFIL</a>
            </button>
        </div>
        <div class="supprimer">
            <button type="submit" name="supprimer">
            SUPPRIMER MON COMPTE
            </button>
        </div>
        <div class="deconnexion">
            <button type="submit" name="deconnexion">
            DECONNEXION
            </button>
        <div>

    </div>

</body>
<?php
    $content = ob_get_clean();
    include 'Layout.php';
?>