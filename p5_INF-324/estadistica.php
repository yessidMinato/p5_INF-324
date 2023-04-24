<?php 
	include 'cabecera.inc.php';
	include 'conexion.inc.php';
	$sw = 0;
	if (isset($_POST["usuario"]) and isset($_POST["password"]))
	{
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];
		$res = mysqli_query($con, "select * from usuario where usuario='".$usuario."' ");
		$datos = mysqli_fetch_array($res);
		if ($datos['usuario'] == $usuario and $datos['password'] == $password)
			$sw = 1;
	}
	include 'login.inc.php';
?>


<div class="cuadro estadistica">
	<figure><img src="imagenes/logoEstadistica.jfif"></figure>
	<h2>Carrera de Estadistica</h2>
	<br>
	<br>
	<h3>--------------Mision---------------</h3>
	<p style="font-size: 0.8em;">
	Formar profesionales idóneos y competentes en el campo de la estadística, capaces de resolver problemas de forma creativa, innovadora y ética con la utilización de la tecnología, los conocimientos científicos y comprometidos con el desarrollo sostenible del país.  </p>
	<br>
	<h3 style="text-aling: center">--------------vision---------------</h3>
	<p style="font-size: 0.8em;">
	La Carrera de Estadística es Líder en la formación de profesionales en la ciencia de la estadística, buscando la excelencia académica a través del desarrollo de la docencia, investigación y extensión    </p>
</div>



<?php
include 'pie.inc.php';
?>