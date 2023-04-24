<?php
	session_start();
	$_SESSION["contador"] = 1;
?>
<html>
<head>
	<title>FCPN</title>
	<link rel="stylesheet" href="estilos/estilos.css">
	
</head>
<body>
	<header>
		<div style="display: inline; text-align: center; ">
            <h1 style="color: #f7f7f7; padding: 7px; font-size: 1.7em;">
                Universidad Mayor de San Andres
            </h1>
			<h2 style="color: #f7f7f7; padding: 7px; font-size: 1.6em;">
				Facultad de Ciencias Puras y Naturales
			</h2>
		</div>
	
		<nav class="menuCarreras" style="text-align: center; ">
			<ul>
			<a href="index.php?<?php echo 'contador='.$_SESSION["contador"] ?>">Pagina Principal</a>
			<a href="estadistica.php?<?php echo 'contador='.$_SESSION["contador"] ?>">Estadistica</a>
			<a href="informatica.php?<?php echo 'contador='.$_SESSION["contador"] ?>">Informatica</a>
			<a href="fisica.php?<?php echo 'contador='.$_SESSION["contador"] ?>">Fisica</a>
			</ul>
		</nav>
	</header>