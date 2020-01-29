<?php session_start();
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
//
$fechas = $_POST["fechas"];
$sql = "DELETE FROM fecha WHERE date ='$fechas'";
$result = $conn->query($sql);
header("Location: proyecto.php");
?>