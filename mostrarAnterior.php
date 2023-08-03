<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mostrar.css">
    <title>Document</title>
</head>

<body>
    <?php

    include 'conexion.php';


    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    echo "<h2 class='title'>Informacion de user:</h2>";
    echo "<table>";
    echo "<thead>";
    echo "<th class='selda'>ID </td>";
    echo "<th class='selda'>USER </th>";
    echo "<th class='selda'>NAME </th>";
    echo "<th class='selda'>FOTO </th>";
    echo "<th class='selda'>emil </th>";
    echo "<th class='selda'>age </th>";
    echo "<th class='selda'>rol </th>";
    echo "</thead>";
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {


            echo "<tr>";
            echo "<td class='selda'>" . $row["id"] . "</td>";
            echo "<td class='selda'>" . $row["username"] . "</td>";
            echo "<td class='selda'>" . $row["nombre"] . "</td>";
            echo '<td class="selda"><img src="data:image/jpeg;base64,' . base64_encode($row["perfilimg"]) . '" alt="Imagen de perfil"></td>';
            echo "<td class='selda'" . $row["email"] . "</td>";
            echo "<td class='selda'>" . $row["age"] . "</td>";
            echo "<td class='selda'>" . $row["rol"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontró ningún user con el ID proporcionado.";
    }
    ?>
</body>

</html>