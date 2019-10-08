<?php
$user = "lander";
$pass = "password";
$hash = '$2y$10$Zmupfe84tqHLLhl/e0GjKujvllTt0isHbwRsM//8kHlq0WeVH1yWy';
//if ($user == $_GET['user']  //&& $pass == $_GET['password']) 
// {
  //  echo "ok";
//}
   // else{
       // echo "ERROR";
  //  }  



if  (password_verify($_GET['password'], $hash) && $_GET['user'] == $user) {
       // echo password_hash($_GET['password'], PASSWORD_DEFAULT)."\n <br><br>";
        echo '¡La contraseña es válida!';
} 
else {
        echo 'La contraseña no es válida';
    }






// leer los datos enviados del form
//echo $_GET['user'];
//echo '<br>';
//echo $_GET['password'];

//
?>