<?php
function leetspeak ($str)

$i=0

if(($str[$i]=="a") ||($str[$i]=="e")  || ( $str[$i]=="i")  || ($str[$i]=="o") || ($str[$i]=="u")|| ($str[$i]=="y"))

{
    echo $str[$i];
    }
    $i=$i+1;
}

$str=  "Caressez longuement votre phrase et elle finira par sourire.";
?>