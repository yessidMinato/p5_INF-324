<div class="cuadro" >
    <h1 style="text-align: center;">Ingresar</h1>
    <form action="informatica.php?<?php echo 'contador='.$_SESSION["contador"] ?>" method="post" style="padding: 5%;">
		
        Usuario: <input type="text" name="usuario" id="usuario">
        <br>
        Password: <input type="password" name="password" id="password">
        <br><br>
		<?php
			if ($sw == 1)
			{
				$cad = "Location: ingreso.php?contador=".$_SESSION["contador"]."&usuario=".$usuario;
				header($cad);
			}
			elseif ($sw == 0) {
				echo '<h3 style="text-align: center;">Contraseña o usuario incorrecto</h3>';
            }

		?>
		<br>
        <input type="submit" value="Ingresar">
    </form>
</div>