<?php
$v = [1,5,6];
$suma = 0;
$vv = [
    [1,2,3],
    [4,5,6]
    ];

//$suma = $v[0] + $v[1] + $v[2] + $v[3];
//echo "batura : " . $suma;
//for ($x = 0; $x <= 10; $x++) {
    //echo "the number is $x <br>";
//}




//for ($x = 0; $x < 3; $x++) {
    //echo "the number is $suma <br>";
    //$suma = $suma + $v[$x];
//}



//$x = 0;
//while($x < 3) {
//$suma = $suma + $v[$x];
//$x++;
//}


//echo "batura : " .$suma;

//foreach ($v as $x) {
    //$suma = $suma + $x;    
//}


//for ($i = 0; $i <count($vv); $i++)  {
  //  for ($j = 0; $j <count($vv[0]); $j++) 
     //   $suma = $suma + $vv[$i][$j];
//}

$suma = 0;
foreach ($vv as $v) {
    foreach($v as $x) {
        $suma = $suma + $x;
    }
}

echo "batura : " .$suma;
?>