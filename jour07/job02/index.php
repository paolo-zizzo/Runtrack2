<?php

if ((isset($_COOKIE['nbvisites']))&&(empty($_GET['ok'])))
{
	setcookie('nbvisites',$_COOKIE['nbvisites'] + 1,0);
	echo "Nombre de visite(s):"," " ;
	echo $_COOKIE['nbvisites'];
	
}
else
{
    setcookie('nbvisites',$_COOKIE['nbvisites'] =0,0);

	
	echo $_COOKIE['nbvisites'];
}
if(!empty($_GET['ok']))
{

unset($_COOKIE['nbvisites']);

}

?>

<form  method="get" action="index.php">
<input type="submit" value="reset" name="ok"></form>