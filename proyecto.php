<?php session_start();

      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:login1.php");  
       }
          echo $_SESSION['use'];
        
echo"<br>";
          echo "Login Success";

          echo "<a href='logout.php'> Logout</a> "; 
?>


<!DOCTYPE html>
<html>
    <head>
</head>
<body>
<div><a href="insert.html"><input type="submit" value="INSERT"></a> <br><hr></div>

    <br>
    
    </body>
    </html>

<link rel="stylesheet" type="text/css" href="css/calendar.css">



<?php 
$add = $_SESSION['use'];

require 'vendor/autoload.php';
use benhall14\phpCalendar\Calendar as Calendar;

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
$usuario = $_POST['name'];
$fecha =  $_POST['fechas'];
$sql = "SELECT date,id FROM fecha WHERE user = '$add';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){?>
    
    
   
        <div class ="block">
         <?php
            echo "titulo: " . $row["date"]. "<br>";
       
            //$events = array();
            $url = "eventos.php?id=".$row['id'];
            $events[] = array(
               'start' =>$row["date"],
               'end' =>$row["date"],
               'summary' => "<a href=".$url.">link</a>",
               'mask' => true,
               'classes' => ['myclass']
           );

            ?>
            <form action="delete.php" method="POST">
                <input type="hidden" name="fechas" value="<?php echo $row["date"]?>">
                <input type="submit" value="Delete">
            
            
            </form>
            <br>
        </div>
            <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();


//require 'vendor/autoload.php';

//use benhall14\phpCalendar\Calendar as Calendar;

 # create the calendar object

 $calendar = new Calendar();

 # if needed, add event

 $calendar->addEvent(
     '2017-01-14',   # start date in Y-m-d format
     '2017-01-14',   # end date in Y-m-d format
     'My Birthday',  # event name text
     true,           # should the date be masked - boolean default true
     ['myclass', 'abc']   # (optional) additional classes in either string or array format to be included on the event days
 );

 # or for multiple events

 /*$events = array();

 $events[] = array(
    'start' =>$row,
    'end' => $row,
    'summary' => '',
    'mask' => true,
    'classes' => ['myclass']
);
*/


 $calendar->addEvents($events);

 # finally, to draw a calendar

 //echo $calendar->draw(date('Y-m-d')); # draw this months calendar

 # this can be repeated as many times as needed with different dates passed, such as:

 echo $calendar->draw(date('Y-01-01')); # draw a calendar for January this year

 echo $calendar->draw(date('Y-02-01')); # draw a calendar for February this year

 echo $calendar->draw(date('Y-03-01')); # draw a calendar for March this year

 echo $calendar->draw(date('Y-04-01')); # draw a calendar for April this year

 echo $calendar->draw(date('Y-05-01')); # draw a calendar for May this year

 echo $calendar->draw(date('Y-06-01')); # draw a calendar for June this year

 # to use the pre-made color schemes, include the calendar.css stylesheet and pass the color choice to the draw method, such as:

 //echo $calendar->draw(date('Y-m-d'));            # print a (default) turquoise calendar

 //echo $calendar->draw(date('Y-m-d'), 'purple');  # print a purple calendar

 //echo $calendar->draw(date('Y-m-d'), 'pink');    # print a pink calendar

 //echo $calendar->draw(date('Y-m-d'), 'orange');  # print a orange calendar

 //echo $calendar->draw(date('Y-m-d'), 'yellow');  # print a yellow calendar

 //echo $calendar->draw(date('Y-m-d'), 'green');   # print a green calendar

 //echo $calendar->draw(date('Y-m-d'), 'grey');    # print a grey calendar

 //echo $calendar->draw(date('Y-m-d'), 'blue');    # print a blue calendar

?>




