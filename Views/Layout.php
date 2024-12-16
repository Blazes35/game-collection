<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection</title>
    <link rel="stylesheet" href="../Assets/CSS/Layout.css">
</head>
<body>
<header class="navbar">
        <div class="logo">
            <a href="./HomeController.php">
                <span class="game">Game</span><span class="collection">Collection</span>
            </a>
        </div>
        </div>
        <nav class="navbar-right">
            <a href="#bibliotheque">MA BIBLIOTHÈQUE</a>
            <a href="#ajouter-jeu">AJOUTER UN JEU</a>
            <a href="#classement">CLASSEMENT</a>
            <a href="#profil">PROFIL</a>
        </nav>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>Game Collection - 2023 - Tous droits réservés</p>
    </footer>
</body>
</html>