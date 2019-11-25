<form method="get" action="index.php">
	<input type="text" placeholder="Entrez en nombre"  name="nombre"/><br>
	<input type="submit" value="ok" name="ok"/>
	
</form>

<?php


if(!empty($_GET['ok']))

{
	if (empty($_GET['nombre']))
	{	
		
	}
	
		else if ($_GET["nombre"] % 2==0)
		{
		echo "Paire !";
		}

			else 
			{
				echo"Impaire !";
			}
}

