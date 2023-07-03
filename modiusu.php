<body bgcolor="#C39BD3">
<?php
$id_carnet = $_GET['id_carnet'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
?>

<form name="nosoynegra" action="modificar.php?id_carnet=<?php echo $id_carnet; ?>&nombre=<?php echo $nombre; ?>&apellido=<?php echo $apellido; ?>" method="GET">
    <p>id_carnet: <input type="text" name="id_carnet" value="<?php echo $id_carnet; ?>"></p>
    <p>nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>"></p>
    <p>apellido: <input type="text" name="apellido" value="<?php echo $apellido; ?>"></p>
    <input type="submit" value="Modificar" name="boton">
</form>
