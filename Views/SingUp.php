<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
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
                <input type="text" name="nom" id="nom" required>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>
                <label for="confirmpassword">Confirmation du mot de passe :</label>
                <input type="password" name="confirmpassword" id="confirmpassword" required>
                <input type="submit" value="S'inscrire'">
                <a href="index.php?action=connection">Se connecter</a>
            </form>
        </div>
    </div>
</body>
</html>