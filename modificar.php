<?php
require("conex.php");
$conn = conectar();
$id_carnet = $_GET['id_carnet'];

if (!empty($_GET['id_carnet'])) {
    $id_carnet = $_GET["id_carnet"];
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
}

$consulta = "UPDATE `datos` SET `nombre` = '$nombre', `apellido` = '$apellido' WHERE `id_carnet` = '$id_carnet'";

if (mysqli_query($conn, $consulta)) {
    echo "Registro modificado";
} else {
    echo "Error: " . mysqli_error($conn);
}

echo "Datos recibidos: $nombre $apellido";
?>
<li><a href="index.php">ir a inicio</a></li>
