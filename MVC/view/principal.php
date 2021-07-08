<?php?>

<!DOCTYPE html>
<head>
    <title>Vista</title>
</head>
<body>
    <h1>Aquí va la vista</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($data["convocatorias"] as $dato){
                echo "<tr>";
                echo "<td>".$dato["nombre"]."</td>";
                echo "</tr>";

            } ?>
        </tbody>
        
    </table>
</body>
</html>