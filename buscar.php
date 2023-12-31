<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buscar.css">
    <title>BUSCAR</title>
</head>

<body>

    <div class="login-box">
        <h2>Register</h2>
        <form action="./buscar.php" method="POST">
            <div class="user-box">
                <input type="text" name="id" id="id">
                <label>ID</label>
            </div>
            <button name="buscar" id="buscar">Enviar</button>
        </form>

    </div>
</body>

</html>
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
