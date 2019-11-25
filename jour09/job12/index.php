<?php
$connexion= mysqli_connect("localhost", "root", "", "jour08");
 
$query=" SELECT `prenom`,`nom`,`naissance` FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-01-01'";
$result= mysqli_query($connexion, $query);
?>
 <table border="2" style="width:500px" style="height=150px">
 <tr>
 <td>prenom</td>
 <td>nom</td>
 <td> naissance</td>

 
 

 
 </tr>
<?php
while($row = mysqli_fetch_array($result)) 
{
  
?>



<tr>
<td><?php echo $row['prenom'];?></td>
<td><?php echo $row['nom'];?></td>
<td><?php echo $row['naissance'];?></td>
    
    
    
   </tr>



   <?php
}
?>
</table>
</html>

