<?php
$connexion= mysqli_connect("localhost", "root", "", "jour08");
 
$query='select *FROM etudiants';
$result= mysqli_query($connexion, $query);
?>
 <table border="1" style="width:100%">
 <tr>
 <td>nom</td>
 <td>prenom</td>
 <td>date de naissance</td>
 <td>sexe</td>
 <td>email</td>

 
 </tr>
<?php
while($row = mysqli_fetch_array($result)) 
{
  
?>



  <tr>
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