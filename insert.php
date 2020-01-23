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
$fecha =  $_POST['fechas'];

//
$sql = "INSERT INTO fecha VALUES ('','$fecha');";
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

/*if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if ($user == $row["name"]){
      if ($password == $row["password"]) {
          //echo "OK";
          header('Location: delete_form.php');
      } else{
        header('Location: read.php');
      }
  } else {
      header('Location: read.php');
  }
} else {
    header('Location: read.php');
}
*/
if ($result === TRUE) {
    header('Location: proyecto.php');
} else{
   header('Location: insert.html');
  }
  
$conn->close();
?>