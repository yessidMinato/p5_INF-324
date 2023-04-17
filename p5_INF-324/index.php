<?php 
// Conectar a la base de datos 
$servername = "localhost"; 
$username = "yessid"; 
$password = "123456"; 
$dbname = "mibaseyessid"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 

// Verificar la conexión 
if (!$conn) { 
    die("Conexión fallida: " . mysqli_connect_error()); 
} 

// Ejecutar la consulta 
$sql = "SELECT 
        sum(CASE WHEN tmp.departamento LIKE 'LP' THEN tmp.cantidad ELSE 0 END) AS LP, 
        sum(CASE WHEN tmp.departamento LIKE 'CB' THEN tmp.cantidad ELSE 0 END) AS CB, 
        sum(CASE WHEN tmp.departamento LIKE 'SC' THEN tmp.cantidad ELSE 0 END) AS SC 
        FROM (SELECT p.departamento, AVG(i.notaFinal) as cantidad 
              FROM persona p, inscripcion i 
              WHERE p.ci = i.ciEstudiante 
              GROUP BY p.departamento) tmp;"; 

$resultado = mysqli_query($conn, $sql); 

// Verificar si la consulta se ejecutó correctamente 
if (!$resultado) { 
    die("Error al ejecutar la consulta: " . mysqli_error($conn)); 
} 

// Mostrar los resultados en una tabla HTML 
echo "<h1>------------ROL DIRECTOR--------------</h1>"; 
echo "<table border='1'> <tr> <th>LP</th> <th>SC</th> <th>CB</th> </tr>"; 
while ($fila = mysqli_fetch_assoc($resultado)) { 
    echo "<tr> <td>" . $fila['LP'] . "</td> <td>" . $fila['SC'] . "</td> <td>" . $fila['CB'] . "</td> </tr>"; 
} 
echo "</table>";
?>


