<?php
$connexion= mysqli_connect("localhost", "root", "", "jour08");
 
$query="SELECT* FROM salles   ORDER BY capacite ASC 
";
$result= mysqli_query($connexion, $query);
?>
 <table border="2" style="width:500px" style="height=150px">
 <tr>
 <td>id</td>
 <td>nom</td>
 <td>id_etage</td>
 <td>capacite</td>
 

 
 </tr>
<?php
while($row = mysqli_fetch_array($result)) 
{
  
?>



<tr>
<td><?php echo $row['id'];?></td>
    <td><?php echo $row['nom'];?></td>
	<td><?php echo $row['id_etage'];?></td>
    <td><?php echo $row['capacite'];?></td>
    
    
   </tr>



   <?php
}
?>
</table>
</html>

