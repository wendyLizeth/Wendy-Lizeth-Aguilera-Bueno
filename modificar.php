<?php
session_start();

include 'conexion.php';
//editar empleados
if (isset($_POST['REQUEST_METHOD'])) {
    $username = $_POST['username'];
    $update = $_POST['update'];

    $sql = "UPDATE empleado SET nombre = '$update' WHERE username = '$username'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./modificar.php");
        exit();
    } else {
        echo "<script>alert('Error al cambiar password: " . $sconn->error . "');</script>";
    }
}
