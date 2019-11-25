<?php
$prenom ="paolo"; // chaine de caractères
$age= "19"; //entier
$myBool = true; //booléen
$moyenne= "19.8"; //nombre à virgule flottante
?>


<html>
<table>
<tr>
<th>Type</th>
<th>Nom</th>
<th>Valeur</th>
</tr>

<tr>
<td>chaine de caractères</td>
<td>$prenom</td>
<td><?php echo "$prenom" ?></td>
</tr>

<tr>
<td>Entier</td>
<td>$age</td>
<td><?php echo "$age" ?></td>
</tr>

<tr>
<td>Booléen</td>
<td>$myBool</td>
<td><?php echo "$myBool" ?></td>
</tr>

<tr>
<td>Nombre à virgule flottante</td>
<td>$moyenne</td>
<td><?php echo "$moyenne " ?></td>
</tr>





</table>
</html>