<?php
require ("conexion.php");
 $status = "";
$con=conectar();
$codigo=$_REQUEST['cod'];
$descripcion=$_REQUEST['gan'];
$precio=$_REQUEST['gas'];

$query="insert into utilidades values ('$codigo','$ganancias','$gastos')";

$cierto=mysql_query($query,$con);

if(!$cierto){
echo "No se ha podido guardar";
}
else {
echo "Datos Guardados Correctamente<br>";
echo "<a href='new.html'>Regresar</a>";
}
?>