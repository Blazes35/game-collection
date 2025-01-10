<?php
$title = "Inscription";
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un jeu à sa bibliothèque</title>
    <link rel="stylesheet" href="Assets/CSS/Form.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un jeu à sa bibliothèque</h1>
        <p>Le jeu que vous souhaitez ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouté à votre bibliothèque !</p>
        <form method="post" action="">
            <div class="form-group">
                <label for="nom">Nom du jeu</label>
                <input type="text" id="nom" name="nom" placeholder="Nom du jeu">
            </div>
            <div class="form-group">
                <label for="editeur">Éditeur du jeu</label>
                <input type="text" id="editeur" name="editeur" placeholder="Éditeur du jeu">
            </div>
            <div class="form-group">
                <label for="date-sortie">Sortie du jeu</label>
                <input type="date" name="date_sortie" id="date_sortie">
            </div>
            <div class="form-group platforms">
                <label>Plateformes</label>
                <label><input type="checkbox" id="Playstation" name="plateforme[]" value="Playstation">Playstation</label>
                <label><input type="checkbox" id="Xbox" name="plateforme[]" value="Xbox">Xbox</label>
                <label><input type="checkbox" id="Nintendo" name="plateforme[]" value="Nintendo">Nintendo</label>
                <label><input type="checkbox" id="PC" name="plateforme[]" value="PC">PC</label>
            </div>
            <div class="form-group">
                <label for="description">Description du jeu</label>
                <textarea id="description" placeholder="Description du jeu" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="image_url">URL de la cover</label>
                <input type="text" id="image_url" placeholder="URL de la cover" name="image_url">
            </div>
            <div class="form-group">
                <label for="site_url">URL du site</label>
                <input type="text" id="site_url" placeholder="URL du site" name="site_url">
            </div>
            <button type="submit">AJOUTER LE JEU</button>
        </form>
    </div>
</body>
</html>
<?php
$content = ob_get_clean();
include 'Layout.php';
?>