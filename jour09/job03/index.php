<?php
$connexion= mysqli_connect("localhost", "root", "", "jour08");
 
$query="select nom,naissance from etudiants where sexe='Femme'";
$result= mysqli_query($connexion, $query);
?>
 <table border="2" style="width:500px" style="height=150px">
 <tr>
 <td>nom</td>
 <td>capacite</td>

 
 <tr>
<?php
while($row = mysqli_fetch_array($result)) {
  
?>



  <tr>
    <td><?php echo $row['nom'];?></td>
	<td><?php echo $row['naissance'];?></td>

   </tr>

<?php
}
?>
</table>
</html>