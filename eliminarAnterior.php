<?php


include 'conexion.php';

if (isset($_POST['eliminar'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM user WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: mostrar.php");
        exit();
    } else {
        echo "<script>alert('Error al eliminar user: " . $conn->error .
            "');</script>";
    }
}
