<?php
include "conexion.inc.php";
include "header.php";

$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];

if ($proceso == '' )
{	
	return header("Location: login.php");
}
else{

	$sql="select * from flujoproceso ";
	$sql.="where Flujo='$flujo' and proceso='$proceso'";
	$resultado=mysqli_query($con, $sql);
	$fila=mysqli_fetch_array($resultado);
	$pantalla=$fila['Pantalla'];
	$pantalla .= ".inc.php";
	$pantallalogica=$fila['Pantalla'];
	$pantallalogica.=".main.inc.php";
	$procesoanterior=$proceso;
	$proceso=$fila['ProcesoSiguiente'];
	include $pantallalogica;
}


?>
<body>
	<!-- Contenido<br> -->
	<form action="motor.php" method="GET">
		<!--iframe src="pantalla.php"></iframe-->
		<input type="submit" class="btn atras"  name="Anterior" value="Anterior"/><br/>
		<br/>
		<input type="hidden" name="flujo" value="<?php echo $flujo;?>"/>
		<input type="hidden" name="proceso" value="<?php echo $proceso;?>"/>
		<input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior;?>"/>
		<?php
		//echo $pantalla;
		include $pantalla;
		?>
		<!-- <input type="submit" name="Siguiente" value="Siguiente"/> -->
	</form>
</body>
</html>
