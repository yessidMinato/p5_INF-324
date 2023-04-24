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
		if ($datos['usuario'] == $usuario and $datos['password'] == $password){
			$sw = 1;
		}
	}
	include 'login.inc.php'
?>

<div class="cuadro informatica">

	<figure><img src="imagenes/logoInformatica.jfif"></figure>
	<h2>Carrera de Informática</h2>
	<br>
	<br>
	<h3>--------------Mision---------------</h3>
	<p style="font-size: 0.8em;">
	Formar profesionales idóneos con calidad humana, ética, valores, excelencia científica, compromiso social, capacidad crítica y creativa para potenciar el desarrollo de la ciencia y la tecnología en el área de la Informática en concordancia con los requerimientos de la sociedad y sus instituciones, desempeñándose con éxito en el ámbito regional, nacional e internacional.
	</p>
	<h3>--------------Vision---------------</h3>
	<p style="font-size: 0.8em;">
	Ser la unidad académica líder a nivel nacional y un referente de alto nivel en la formación de profesionales del área de la Informática, que aporta a la región y el país no solo con sus graduados sino también con proyectos de investigación y extensión de alto impacto relacionados con ciencia y tecnología.
	</p>
</div>

<?php
include 'pie.inc.php';
?>