<?php
$connexion= mysqli_connect("localhost", "root", "", "jour08");
 
$query="SELECT SUM(capacite)
FROM salles";
$result= mysqli_query($connexion, $query);
?>
 <table border="2" style="width:500px" style="height=150px">
 <tr>
 <td>capacite_totale</td>
 

 
 </tr>
<?php
while($row = mysqli_fetch_array($result)) 
{
  
?>



<tr>
    <td><?php echo $row['SUM(capacite)'];?></td>
    
   </tr>

<?php
}
?>
</table>
</html>