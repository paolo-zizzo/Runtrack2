<?php
$connexion= mysqli_connect("localhost", "root", "", "jour08");
 
$query="SELECT * FROM `etudiants`  WHERE naissance > CURRENT_DATE - INTERVAL '18' YEAR";
$result= mysqli_query($connexion, $query);
?>
 <table border="2" style="width:500px" style="height=150px">
 <tr>
 <td>id</td>
 <td>nom</td>
 <td>prenom</td>
 <td>naissance</td>
 <td>sexe</td>
 <td>email</td>

 
 </tr>
<?php
while($row = mysqli_fetch_array($result)) 
{
  
?>



<tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['nom'];?></td>
	<td><?php echo $row['prenom'];?></td>
    <td><?php echo $row['naissance'];?></td>
    <td><?php echo $row['sexe'];?></td>
    <td><?php echo $row['email'];?></td>
   </tr>

<?php
}
?>
</table>
</html>