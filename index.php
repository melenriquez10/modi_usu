<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>melcita</title>
    <link rel="stylesheet" href="style.css">
</head>

<body bgcolor="#7FB3D5">
    <header>
        <h1>Listados de alumnos</h1>
    </header>
    <main>
      
        <form name="primel" action="index.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required><br><br>
            <input type="submit" value="Insertar" name="boton">
        </form>
    </main>
</body>
</html>

<?php
include("conex.php");
$linkconn = conectar();

// Agregar datos
if (isset($_POST['boton'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $consulta = "INSERT INTO `datos` (`nombre`, `apellido`) VALUES ('$nombre', '$apellido')";

    if (mysqli_query($linkconn, $consulta)) {
        echo "Su registro fue agregado";
    } else {
        echo "Error: " . mysqli_error($linkconn);
    }
}


// Obtener y mostrar los datos
$sql = "SELECT * FROM datos";
$resultado = mysqli_query($linkconn, $sql);

echo "<table bgcolor='#AAB7B8'>";
echo "<tr><td>Nro alumno</td><td>Nombre</td><td>apellido</td><td>modificar</td><td>eliminar</td></tr>";

foreach ($resultado as $fila) {
    $id_carnet = $fila['id_carnet'];
    $nombre = $fila['nombre'];
    $apellido = $fila['apellido'];

    echo "<tr><td>$id_carnet</td><td>$nombre</td><td>$apellido</td>";
    echo "<td><a href='modiusu.php?id_carnet=$id_carnet&nombre=$nombre&apellido=$apellido'><img src='modi.png' width='50' height='50'></a></td>";
    echo "<td><a href='eliminar.php?id_carnet=$id_carnet'><img src='eli.png' width='50' height='50'></a></td>";
    echo "</tr>";

}

echo "</table>";
?>
