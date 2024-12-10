<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection</title>
    <link rel="stylesheet" href="/path/to/your/styles.css">
</head>
<body>
    <header>
        <h1>Game Collection</h1>
        <nav>
            <ul>
                <li><a href="/"><img src="../Assets/CSS/logo.png" alt="Game Collection Logo" style="height: 50px;"></a></li>
                <li><a href="/games">Ma bibliothèque</a></li>
                <li><a href="/about">Ajouter un jeu</a></li>
                <li><a href="/contact">Classement</a></li>
                <li><a href="/contact">Profil</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Game Collection. All rights reserved.</p>
    </footer>
</body>
</html>