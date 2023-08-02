<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "casa_domotica";

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    die("conexion fallida" . $conn->$connect_error);
} else {
}
