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
echo "<div style='background-color: #eee; padding: 20px;'>"; 
echo "<h1 style='color: white; background-color: #333; padding: 10px;'>ROL DIRECTOR</h1>"; 
echo "<table style='border-collapse: collapse; width: 100%;'> <tr style='background-color: #ddd;'> <th style='padding: 10px;'>LP</th> <th style='padding: 10px;'>SC</th> <th style='padding: 10px;'>CB</th> </tr>"; 
while ($fila = mysqli_fetch_assoc($resultado)) { 
    echo "<tr> <td style='padding: 10px; text-align: center;'>" . $fila['LP'] . "</td> <td style='padding: 10px; text-align: center;'>" . $fila['SC'] . "</td> <td style='padding: 10px; text-align: center;'>" . $fila['CB'] . "</td> </tr>";} 
echo "</table>";
echo "</div>";

?>

