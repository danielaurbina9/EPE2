<?php
include("conexion.php");
$con=conectar();

if(isset($_REQUEST['mostrar'])){
$consulta="select * from user ";
$resultado=mysql_query($consulta,$con);

if(!resultado){
echo "fallo al consultar";
}
else {
	echo"<!DOCTYPE html>
<html>
<head><title>Insertar Datos</title>
</head>
<body>";
echo "<strong>Datos encontrados</strong><br><br>";
echo "<table border='1'>";
echo"<tr>";
while($row=mysql_fetch_array($resultado)){
echo "<td>".$row['pago_internet']."</td>
<td>".$row['pago_energia']."</td>
<td>".$row['alimentacion']."</td>";
<td>".$row['bonos']."</td>";
echo "</tr>";

while($row=mysql_fetch_array($resultado)){
echo "<td>".$row['salario']."</td>
<td>".$row['comisiones_venta']."</td>
<td>".$row['intereses_bancarios']."</td>";
<td>".$row['ganancias_google']."</td>";
echo "</tr>";
}
echo "</table></body>
</html>";
}
}
echo "<a href='mostrar.html'>Regresar</a>";
?>