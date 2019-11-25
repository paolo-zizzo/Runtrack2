<html>
<form  method="post" action="index.php">

<SELECT name="option" size="1">
    <option>choose your style</option>
<OPTION>style1</option>
<OPTION>style2</option>
<OPTION>style3</option>
<input class="style"type="submit" value="valider" name="ok"></form>
    </html>



<?php

if (!empty ($_POST['ok']))
{
    if ($_POST ['option']=="style1")
{
    
?>
<link href="style1.css" rel="stylesheet">
<?php
}

else if  ($_POST ['option']=="style2")
{
     
?>
<link href="style2.css" rel="stylesheet">
<?php   
}

    else  if ($_POST ['option']=="style3")
{
?>
<link href="style3.css" rel="stylesheet">
<?php  


}
}
?>

