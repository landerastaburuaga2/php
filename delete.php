<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
$id = $_POST["titulo"];
$sql = "DELETE FROM noticias WHERE titulo ='$id'";
$result = $conn->query($sql);
header("Location: delete_form.php");
?>