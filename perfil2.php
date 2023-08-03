<?php
session_start();

// Resto del código...
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'conexion.php'; ?>
    <link rel="stylesheet" href="usuario.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>


<body>
    <div class="container">
        <?php
        // Verificar si el usuario ha iniciado sesión
        if (isset($_SESSION['username'])) {
            // Obtener el nombre de usuario actual
            $username = $_SESSION['username'];

            // Obtener los datos del usuario de la base de datos (ejemplo)
            // Supongamos que ya has establecido la conexión a la base de datos

            // Consulta SQL para obtener los datos del usuario
            $query = "SELECT * FROM user WHERE username = '$username'";
            $result = mysqli_query($conn, $query);

            // Verificar si se encontraron resultados
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                // Obtener los valores de las columnas
                $perfilimg = $row['perfilimg'];
                $username = $row['username'];
                $name = $row['nombre'];
                $mail = $row['email'];
                $age = $row['age'];
                $last = $row['last_register'];
                $rol = $row['rol'];


                // Generar el HTML dinámicamente con los datos obtenidos
                echo '  <h1>@' . $username . '</h1>';
                echo '<div class="miinformacion">';
                echo '<div class="perfilimg">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($perfilimg) . '" alt="Imagen de perfil">';
                echo '</div>';
                echo '<div class="datos">';
                echo '<h3 class="nameuser">NOMBRE: ' . $name . '</h3>';
                echo '<h3 class="nameuser">EDAD: ' . $age . '</h3>';
                echo '<h3 class="nameuser">EMAIL: ' . $mail . '</h3>';
                echo '<h3 class="nameuser">ROL: ' . $rol . '</h3>';
                echo '<h3 class="nameuser">ULTIMO ACCESO: ' . $last . '</h3>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
            header("Location: login.php");
            exit();
        }
        ?>

    </div>
</body>

</html>

<style>
    /* Estilos para el contenedor principal */
    h1 {
        text-align: center;
        color: #fafafa;
    }

    .miinformacion {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fafafa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Estilos para la imagen de perfil */
    .perfilimg img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Estilos para los datos de perfil */
    .datos {
        margin-top: 20px;
    }

    .nameuser {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    /* Estilos para el título "MI INFORMACION" */
    h3 {
        font-size: 20px;
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
</style>