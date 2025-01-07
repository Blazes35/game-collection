<?php
$Title = "Ajouter un jeu à sa bibliothèque";
ob_start();

var_dump($test);

?>


 <div class="container">
        <h1>Ajouter un jeu à sa bibliothèque</h1>
        <p>Le jeu que vous souhaitez ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouté à votre bibliothèque !</p>
        <form>
            <div class="form-group">
                <label for="nom-jeu">Nom du jeu</label>
                <input type="text" id="nom-jeu" placeholder="Nom du jeu">
            </div>
            <div class="form-group">
                <label for="editeur-jeu">Éditeur du jeu</label>
                <input type="text" id="editeur-jeu" placeholder="Éditeur du jeu">
            </div>
            <div class="form-group">
                <label for="date-sortie">Sortie du jeu</label>
                <input type="date" id="date-sortie">
            </div>
            <div class="form-group platforms">
                <label>Plateformes</label>
                <label><input type="checkbox">Playstation</label>
                <label><input type="checkbox">Xbox</label>
                <label><input type="checkbox">Nintendo</label>
                <label><input type="checkbox">PC</label>
            </div>
            <div class="form-group">
                <label for="description-jeu">Description du jeu</label>
                <textarea id="description-jeu" placeholder="Description du jeu"></textarea>
            </div>
            <div class="form-group">
                <label for="url-cover">URL de la cover</label>
                <input type="text" id="url-cover" placeholder="URL de la cover">
            </div>
            <div class="form-group">
                <label for="url-site">URL du site</label>
                <input type="text" id="url-site" placeholder="URL du site">
            </div>
            <button type="submit">AJOUTER LE JEU</button>
        </form>
    </div>
<?php
$content = ob_get_clean();
include 'Layout.php';
