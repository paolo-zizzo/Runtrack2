<?php
$connexion= mysqli_connect("localhost", "root", "", "jour08");
 
$query="SELECT SUM(superficie)FROM etage";
$result= mysqli_query($connexion, $query);
?>
 <table border="2" style="width:500px" style="height=150px">
 <tr>
 <td>superficie_totale</td>
 

 
 </tr>
<?php
while($row = mysqli_fetch_array($result)) 
{
  
?>



<tr>
    <td><?php echo $row['SUM(superficie)'];?></td>
    
   </tr>

<?php
}
?>
</table>
</html>