<?php
function occurences ($str,$char)
{
$i=0;
$occurences=0;

while  ($i<strlen($str))

{
    if($str[$i]==$char)
    {
        $occurences=$occurences+1;

    }
    $i=$i+1;
}
return ($occurences);
}




$str = "Caressez longuement votre phrase et elle finira par sourire.";
$char="s";
echo occurences ($str,$char);
?>