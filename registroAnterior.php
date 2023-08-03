<?php

session_start();

include 'conexion.php';

// Insertar user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $name = $_POST["nombre"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $rol = $_POST["rol"];

    echo "<script>console.log('hola')</script>";

    $sql = "INSERT INTO user (username, nombre,password, email, age, rol) VALUES ('$username', '$name', '$password', '$email', '$age', '$rol');";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('USER ISNERTADO: .$username '); window.location.href = 'login.html'; </script>";
        // header("Location: registro.html");
        exit();
    } else {
        echo "<script>alert('Error al insertar user: " . $conn->error . "');</script>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqlauth = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $sqlauth->bind_param('ss', $username, $password);
    $sqlauth->execute();

    if ($sqlauth->fetch()) {
        $_SESSION['username'] = $username;
        header('Location: index.html');
        echo "<script>alert('Bienvenido $username'); window.location.href = 'homefake.html';</script>";

        exit();
    } else {
        echo "Datos inválidos, intenta nuevamente.";
    }
}
