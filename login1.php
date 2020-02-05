<DOCTYPE html>
  <html>
  <head>
    <body>
    <td><a href="insertusuario.html"><input type="submit" value="INSERT"></a></td>
    <br>
</body>
</head>
</html>


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

if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    //header("Location:home.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['name'];
     $pass = $_POST['password'];
     $sql = "SELECT * FROM usuario WHERE name = '$user';";

     $result = $conn->query($sql);
     $row = $result->fetch_assoc();
      
     if (($result->num_rows > 0) && ($user == $row["name"]) && (password_verify($pass, $row["password"]))) 

      //if($user == "Ank" && $pass == "1234")  // username is  set to "Ank"  and Password   
     
      

         {                              // is 1234 by default     

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("proyecto.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
//echo $sql . "<br><br>";
//
$result = $conn->query($sql);





 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>

<form action="" method="POST">

    <table width="200" border="0">
  <tr>
    <td>  UserName</td>
    <td> <input type="text" name="name" > </td>
  </tr>
  <tr>
    <td> PassWord  </td>
    <td><input type="password" name="password"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>
