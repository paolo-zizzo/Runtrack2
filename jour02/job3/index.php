<?php
$laplateforme="LaPlateforme_";
$nombre=0;

echo $nombre;
echo "</br>";

while ($nombre<100)
{

$nombre=$nombre+1;




if  (($nombre>=0) && ($nombre<=20))
{
echo "<i>$nombre</i>";
echo"</br>";

}

else if (($nombre==42))
{
    echo "$laplateforme";
    echo "</br>";
}
else if  (($nombre>=25) && ($nombre<=50))
{
echo "<u>$nombre</u>";
echo"</br>";
}
else
{
    echo $nombre;
    echo "</br>";

}
}