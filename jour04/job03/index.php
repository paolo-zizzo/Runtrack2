<form method="post" action="index.php">
<input type="text" placeholder="prenom" name="prenom"/><br>
<input type="text" placeholder="nom" name="nom"/><br>
<input type="email"placeholder="email"  name="email"/><br>
<input type="text" placeholder="username"name="username"><br>
<input type="password" id=pass placeholder="password" name="password"/><br>
<input type= "text"placeholder="homme,femme" name="sexe"><br>
<input type="submit" value="ok"/><br>
<?php

foreach ($_POST as $cle=> $valeur) 

{
    echo $cle. " " .$valeur;
    echo "</br>";
}
