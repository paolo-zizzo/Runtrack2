<?php

$nombre=0;
$mult3=3;
$mult5=5;


echo "$nombre";
echo "</br>";

while ($nombre<100)
{

$nombre=$nombre+1;


if (($nombre % $mult5==0) && ($nombre % $mult3==0))
  {  echo "FizzBuzz";
     echo "</br>";
  }

  else if ($nombre % $mult3==0)
  {
      echo "fizz";
      echo "</br>";
}

 else if ($nombre % $mult5==0)
 {
     echo "buzz";
     echo "</br>";
}

else {
    echo $nombre;
    echo "</br>";
}
}