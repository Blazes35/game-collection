<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection</title>
    <link rel="stylesheet" href="Assets/CSS/Layout.css">
</head>
<body>
<header class="navbar">
        <div class="logo">
            <a href="?page=Home">
                <span class="game">Game</span><span class="collection">Collection</span>
            </a>
        </div>
        </div>
        <nav class="navbar-right">
            <a href="?page=">MA BIBLIOTHÈQUE</a>
            <a href="?page=AddGameWithoutForm">AJOUTER UN JEU</a>
            <a href="?page=Classement">CLASSEMENT</a>
            <a href="?page=">PROFIL</a>
        </nav>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>Game Collection - <?php echo date("Y"); ?> - Tous droits réservés</p>
    </footer>
</body>
</html>