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
//echo "Connected successfully";
// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$user =  $_POST['username'];
$password = $_POST['pass'];
$img = $_POST['img'];
$id = $_POST['id'];
//
$sql = "INSERT INTO noticias VALUES ('$user','$password','$img','$id');";
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
    header('Location: delete_form.php');
} else{
   header('Location: read.php');
  }
$conn->close();
?>