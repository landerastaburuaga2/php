<div><a href="proyecto.php"><input type="submit" value="VOLVER ATRAS"></a> <br><hr></div>
<?php session_start();
/*$add = $_SESSION['use'];
$eventos = $_SESSION['evento'];
$fechas = $_SESSION['fechas'];
echo $fechas;
echo $eventos;
*/

$servername = "localhost";
$username = "lander";
$password = "Admin1234";
$dbname = "users";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$usuario = $_POST['name'];
$fecha =  $_POST['fechas'];
$id = $_GET['id'];
$add = $_SESSION['use'];
$sql = "SELECT date,evento FROM fecha WHERE user = '$add' AND id = '$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['date'];
echo"<br>";
echo $row['evento'];

