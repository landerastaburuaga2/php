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
$add1 = $_SESSION['use'];
$sql = "DELETE FROM usuario WHERE name ='$add1'";
$sql1 = "DELETE FROM fecha WHERE user ='$add1'";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);


header('Location: login1.php');

?>