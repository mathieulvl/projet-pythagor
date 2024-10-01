<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de Pythagore</title>
</head>
<body>
    <h1>Table de Pythagore</h1>
    <table border="1">
        <thead>
            <tr>
                <th>X</th>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                    if ($i == $j) {
                        echo "<td>X</td>";
                    } else {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
  
  <h4>Lavallee Mathieu</h4>
</body>
</html>