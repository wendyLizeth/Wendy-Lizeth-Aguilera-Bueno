<?php

include 'conexion.php';


$sql = "SELECT * FROM user";
$result = $conn->query($sql);


if ($result->num_rows > 0)

    while ($row = $result->fetch_assoc()) {
        echo "<h2>Informacion de user:</h2>";
        echo "ID: " . $row["id"] . "<br>";
        echo "USERNAME: " . $row["username"] . "<br>";
        echo "NOMBRE: " . $row["nombre"] . "<br>";
        echo "PASSWORD: " . $row["password"] . "<br>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($row["perfilimg"]) . "'><br>'";
        echo "EMAIL: " . $row["email"] . "<br>";
        echo "AGE: " . $row["age"] . "<br>";
        echo "ROL: " . $row["rol"] . "<br>";
    }
else {
    echo "No se encontró ningún user con el ID proporcionado.";
}
