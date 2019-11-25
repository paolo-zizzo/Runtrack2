<form  method="get" action="index.php">
<input type="submit" value="reset" name="ok"></form>












<?php
session_start();
if((isset($_SESSION['nbvisites']))&&(empty($_GET['ok'])))
{
	
	$_SESSION['nbvisites']=$_SESSION['nbvisites']+1;

	echo "Nombre de visite(s):"," " ;
	echo $_SESSION['nbvisites'];
	
}
else
{
	$_SESSION['nbvisites']=0;
	echo "Nombre de visite(s):"," " ;
	echo $_SESSION['nbvisites'];
}



if(!empty($_GET['ok']))
{

unset($_SESSION['nbvisites']);

}

?>








