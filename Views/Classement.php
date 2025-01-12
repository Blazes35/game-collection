<?php
ob_start();  
?>
<link rel="stylesheet" href="Assets/CSS/Classement.css">
    <h2>Classement des Joueurs</h2>

    <?php 
    if (isset($classement) && !empty($classement)): ?>
        <table>
            <tr>
                <th>Position</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Nom du Jeu</th>
                <th>Total Heures de Jeu</th>
            </tr>
            <?php foreach ($classement as $joueur): ?>
                <tr>
                    <?php $compte++;
                    $heures = floor($joueur['temps_de_jeu'] / 60);
                    $minutes = $joueur['temps_de_jeu'] % 60;
                    if ($heures != 0){ 
                    ?>
                    <td><?php echo $compte?></td>
                    <td><?php echo htmlspecialchars($joueur['prenom']) ?></td>
                    <td><?php echo htmlspecialchars($joueur['nom']) ?></td>
                    <td><?php echo htmlspecialchars($joueur['nom_jeu']) ?></td>
                    <td><?php echo htmlspecialchars(sprintf('%02d:%02d', $heures, $minutes));}?>
                    </td>
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