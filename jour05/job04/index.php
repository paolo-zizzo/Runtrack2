<?php
function calcule($a,$operation,$b)

{
   switch ($operation){
       case "+":
       $calcule =$a+$b;
       break;
   

    case"%":
    $calcule=$a%$b;
    break;
 
    case"*":
    $calcule=$a*$b;
    break;

    case"-":
    $calcule=$a-$b;
    break;

    case"/":
    $calcule=$a/ $b;
    break;
   }
   return ($calcule);
}





$a=10;
$operation= "/";
$b=12;

echo calcule ($a,$operation,$b);

?>