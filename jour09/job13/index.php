<?php
$connexion= mysqli_connect("localhost", "root", "", "jour08");
 
$query=" SELECT salles.nom as nom_salles , etage.nom FROM salles, etage WHERE   etage.id=salles.id_etage";
$result= mysqli_query($connexion, $query);
?>
 <table border="2" style="width:500px" style="height=150px">
 <tr>
 <td>etage</td>
 <td>salles</td>


 
 

 
 </tr>
<?php
while($row = mysqli_fetch_array($result)) 
{
  
?>



<tr>
<td><?php echo $row['nom'];?></td>
<td><?php echo $row['nom_salles'];?></td>

    
    
    
   </tr>



   <?php
}
?>
</table>
</html>

