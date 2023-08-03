<?php

include 'conexion.php';

if (isset($_POST['buscar'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM user WHERE id = $id";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Informacion de user:</h2>";
        echo "ID: " . $row["id"] . "<br>";
        echo "USERNAME: " . $row["username"] . "<br>";
        echo "NOMBRE: " . $row["nombre"] . "<br>";
        echo "PASSWORD: " . $row["password"] . "<br>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($row["perfilimg"]) . "'><br>'";
        echo "EMAIL: " . $row["email"] . "<br>";
        echo "AGE: " . $row["age"] . "<br>";
        echo "ROL: " . $row["rol"] . "<br>";
    } else {
        echo "No se encontró ningún user con el ID proporcionado.";
    }
}
