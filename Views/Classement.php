<?php
ob_start();  
?>
<link rel="stylesheet" href="Assets/CSS/Classement.css">
    <h2>Classement des Joueurs</h2>
    

    <?php 
    if (isset($classement) && !empty($classement)): ?>
        <table>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Nom du Jeu</th>
                <th>Total Heures de Jeu</th>
            </tr>
            <?php foreach ($classement as $joueur): ?>
                <tr>
                    <td><?= htmlspecialchars($joueur['prenom']) ?></td>
                    <td><?= htmlspecialchars($joueur['nom']) ?></td>
                    <td><?= htmlspecialchars($joueur['nom_jeu']) ?></td>
                    <td><?= htmlspecialchars($joueur['total_heures']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="text-align: center;">Le classement n'est pas disponible ou la liste est vide.</p>
    <?php endif; ?>
<?php
$content = ob_get_clean();
include 'Layout.php';
?>