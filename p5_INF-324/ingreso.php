<?php 
	include 'cabecera.inc.php';
    include 'conexion.inc.php';
    $_SESSION["contador"] = $_SESSION["contador"]+1;

    if (isset($_GET['usuario']))
        $usuario = $_GET["usuario"];
    else 
        $usuario = $_SESSION['usuario'];
        
    $resUsuario = mysqli_query($con, "select * from usuario where usuario='".$usuario."' ");
    $datosUsuario = mysqli_fetch_array($resUsuario);
    $ci = $datosUsuario['ci'];

    $resPersona = mysqli_query($con, "select * from persona where ci='".$ci."' ");
    $datosPersona = mysqli_fetch_array($resPersona);
    $_SESSION['usuario'] = $usuario;
?>

<div class="cuadro" style="width: 50%; margin-left: 10%; padding: 2%;">
    ----------------PERSONA----------------
    <br>
    Nombre Completo: <?php echo $datosPersona['nombreCompleto']?>
    <br>
    CI: <?php echo $datosPersona['ci']?>
    <br>
    Fecha Nacimiento: <?php echo $datosPersona['fechaNaci']?>
    <br>
    Departamento: <?php echo $datosPersona['departamento']?>
    <br>
    contador: <?php echo $_SESSION['contador']?>
    ----------------------------------------

</div>

<?php 
    if ($usuario=="Director"){
        include 'director.inc.php';
    }
	include 'pie.inc.php';
?>
