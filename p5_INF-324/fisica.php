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

<div class="cuadro fisica">
<figure><img src="imagenes/logoFisica.png"></figure>
	<h2>Carrera de Fisica</h2>
	<br>
	<br>
	<br>
	<h3>--------------Mision---------------</h3>
	<p style="font-size: 0.8em;">
	formar y entrenar recursos humanos de alto nivel, especializados en la investigación científica, la docencia y la aplicación de conocimientos en todas las áreas de la Física; crear y difundir conocimiento en física o relacionado con la física, formando y contribuyendo para la formación de profesionales críticos, independientes y capacitados tanto a nivel de pregrado como de posgrado	<br>
	<h3 style="text-aling: center">--------------Vision---------------</h3>
	<p style="font-size: 0.8em;">
	La visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas para entrar competitivamente en el ámbito científico a nivel regional y mundial.</div>

<?php
include 'pie.inc.php';
?>