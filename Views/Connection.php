<?php ob_start(); ?>
<body>
<link rel="stylesheet" href="Assets/CSS/Connection.css">
<body>
<div class="container">
        <div class="form-container">
            <h1>Se connecter à Game Collection</h1>
            <?php echo $erreur; ?>
            <form action="" method="post">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
                
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>
                
                <button type="submit">SE CONNECTER</button>
            </form>
            <a href="https://td21-4.game-collection.ovh/SignUp" class="register-link">S'inscrire</a>
        </div>
</body>
<?php
  $content = ob_get_clean();
  include 'Layout.php';
?>