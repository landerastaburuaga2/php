<?php  session_start(); ?>  // session starts with the help of this function 

<?php
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
$user =  $_POST['user'];
$password = $_POST['password'];
//
$sql = "SELECT * FROM usuario WHERE name = '$user';";
//echo $sql . "<br><br>";
//
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($user == $row["name"]){
        if (password_verify($password, $row["password"])) {
            echo "OK";
        } else{
            echo "KO";
        }
    } else {
        echo "KO";
    }
} else {
    echo "KO";
}
*/
/*$row = $result->fetch_assoc();
if (($result->num_rows > 0) && ($user == $row["user"]) && (password_verify($password, $row["password"]))) {
    echo "OK";
} else{
    echo "KO";
}
*/

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if ($user == $row["name"]){
      if ($password == $row["password"]) {
          //echo "OK";
          header('Location: proyecto.php');
      } else{
        header('Location: login.html');
      }
  } else {
      header('Location: login.html');
  }
} else {
    header('Location: login.html');
}

$conn->close();
?>