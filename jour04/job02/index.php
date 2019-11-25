

<form method="get" action="index.php">
<input type="text" placeholder="prenom" name="prenom"/><br>
<input type="text" placeholder="nom" name="nom"/><br>
<input type="email"placeholder="email"  name="email"/><br>
<input type="text" placeholder="username"name="username"><br>
<input type="password" id=pass placeholder="password" name="password"/><br>
<input type= "text"placeholder="homme,femme" name="sexe"><br>
<input type="submit" value="ok"/><br>
<?php

echo"<tr>";
echo"<td>";echo"argument";
echo"</td>";
echo"<td>" ;echo" valeurs";
echo"</td>";
echo"</tr>";
foreach ($_GET as $cle=> $valeur) 

{


echo"<table>";

echo"<tr>";
echo"<td>";
echo$cle;
echo"</td>";
echo"<td>";
echo$valeur;
echo"</td>";
echo"</tr>";
echo"</table>";

}






?>