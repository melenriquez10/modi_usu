<?php
require("conex.php");
$linkconn=conectar();
$conn = conectar();
if(!empty($_GET['id_carnet']))
{
    $id_carnet=$_GET['id_carnet'];
}
   
  $consultarInsertar="DELETE FROM `datos` WHERE `datos`.`id_carnet` = $id_carnet";
  
  echo"$consultarInsertar";
  
if (mysqli_query($conn,  $consultarInsertar))
{
    echo "registro eliminado";
}
else 
{
    echo "error:" .mysqli_error($conn);
}
  
    
    echo"datos eliminados $id_carnet";
?>
<li><a href="index.php">ir a inicio</a></li>