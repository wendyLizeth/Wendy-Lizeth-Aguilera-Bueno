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

/* if (isset($_POST['buscar'])){
    $id = $_POST['id'];

    $sql = "SELECT * FROM user WHERE id = $id";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0){
        $row = $result -> fetch_assoc();
        echo "ID: " . $row["id"] . "<br>";
        echo "Username: " . $row["username"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Password: " . $row["password"] . "<br>";
        echo "E-mail: " . $row["email"] . "<br>";
        echo "Age: " . $row["age"] . "<br>";
        echo "Rol: " . $row["rol"] . "</td>";
    } else {
        echo "No se encontró ningún empleado con el ID proporcionado.";
    }
}
 */
?>
<!--  /*    // Buscar user por ID
    
    if (isset($_POST['Buscar'])) {
        $id = $_POST['id'];

        $sql = "SELECT * FROM empleados WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<h2>Información del empleado:</h2>";
            echo "ID: " . $row["id"] . "<br>";
            echo "Usernname: " . $row["username"] . "<br>";
            echo "Name: " . $row["name"] . "<br>";
            echo "Password: " . $row["password"] . "<br>";
            echo "E-mail:" . $row["email"] . "<br>";
            echo "Age: " . $row["age"] . "<br>";
            echo "Rol: " . $row["rol"] . "</td>";
        } else {
            echo "No se encontró ningún empleado con el ID proporcionado.";
        }
    }

    //ELIMINAR usuario
    if (isset($_POST['Eliminar'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM user WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: registrar.php");
            exit();
        } else {
            echo "<script>alert('Error al eliminar empleado: " . $conn->error .
                "');</script>";
        }

    }

    if (isset($_POST['Modificar'])) {
        $id_up = $_POST['id-up'];
        $nombre_update = $_POST['nombre-update'];

        $sql = "UPDATE user SET NOMBRE='$nombre_update' WHERE ID = '$id_up'";
        if ($conn->query($sql) === TRUE) {
            header("Location: registro.php");
            exit();
        } else {
            echo "<script>alert('Error al actualizar empleado: " . $conn->error .
                "');</script>";
        }

    }

 */ -->