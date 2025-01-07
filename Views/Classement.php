<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement des Joueurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Classement des Joueurs</h2>

    <?php if (isset($classement) && !empty($classement)): ?>
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
</body>
</html>