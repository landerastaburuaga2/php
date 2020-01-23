<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="delete_form.css">
</head>
<body>
<div class ="insert"><a href="insert.html"><input type="submit" value="INSERT"></a> <br><hr></div>


    <br>
    
    </body>
    </html>




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
//

$sql = "SELECT * FROM noticias";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
    
   
    <div class ="block">
     <?php
        echo "titulo: " . $row["titulo"]. "<br> info: " . $row["info"]. "<br> <img width='20%' src=img/" . $row["img"].  " ><br>";
        ?>
        <form action="delete.php" method="POST">
            <input type="hidden" name="titulo" value="<?php echo $row["titulo"]?>">
            <input type="submit" value="Delete">
        
        
        </form>
        <br>
            
            <form action="update.php" method="POST">
                username:<br>
            <input type="text" name="titulo" value="<?php echo $row["titulo"]?>">
                <br>
                Password:<br>
            <input type="text" name="info" value="<?php echo $row["info"]?>">
            <br> <br>
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <input type="submit" value="update"><hr>
            </form> 
    </div>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
