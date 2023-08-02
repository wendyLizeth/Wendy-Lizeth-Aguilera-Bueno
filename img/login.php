<?php
session_start();

require 'conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqlauth = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $sqlauth->bind_param('ss', $username, $password);
    $sqlauth->execute();

    if ($sqlauth->fetch()) {
        $_SESSION['username'] = $username;
        /*         header('Location: home.html');
 */
        echo "<script>alert('Bienvenido $username'); window.location.href = 'index.html';</script>";

        exit();
    } else {
        echo "Datos inválidos, intenta nuevamente.";
    }
}
