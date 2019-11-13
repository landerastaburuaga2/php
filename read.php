<!DOCTYPE html>
<html>
<body>


   
<a href="login.html"><input type="submit" value="Login"></a>
<br>


    </body>
    </html>
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

$sql = "SELECT * FROM noticias";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "titulo: " . $row["titulo"]. "<br> info: " . $row["info"]. "<br><hr/>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
