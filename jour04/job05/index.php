<form method="post" action="index.php">
<input type="text" placeholder="username"name="username"><br>
<input type="password" id=pass placeholder="password" name="password"/><br>
<input type="submit" value="ok" name="ok"/><br>

</form>


<?php

if (!empty($_POST['ok']))
{
if (($_POST["username"]=="jonh")&&($_POST["password"]=="rambo"))
{
    echo "C’est pas ma guerre";
}
else 
echo "votre pire cauchemard";
}
?>
