<html>
<form method="post" action="index.php">
<SELECT name="nom" size="1">
<OPTION>style1
<OPTION>style2
<OPTION>style3
<input class="style"type="submit" value="valider" name="ok"></form>
    </html>



<?php
if (!empty ($_POST['ok']))
{
    echo "choissisez un style";
}


?>