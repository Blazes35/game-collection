<?php
ob_start();  
?>
<link rel="stylesheet" href="Assets/CSS/Classement.css">
    <h2>Classement des Joueurs</h2>

    <?php 
    if (!empty($topJoueurs)): ?>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Temps de jeu cumulé</th>
                    <th>Jeu favori</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (array_slice($topJoueurs, 0, 20) as $joueur): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($joueur['nom']); ?></td>
                        <td><?php echo htmlspecialchars($joueur['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($joueur['temps_de_jeu']); ?></td>
                        <td><?php echo htmlspecialchars($joueur['jeu_favori']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p style="text-align: center;">Le classement n'est pas disponible ou la liste est vide.</p>
    <?php endif; ?>
<?php
$content = ob_get_clean();
include 'Layout.php';
?>