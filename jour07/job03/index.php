<form  method="get" action="index.php">
<input type="text" placeholder="prenom" name=prenom>
<input type="submit" value="valider" name="ok">
<input type="submit" value="supprimer la liste" name="supp"></form>

<?php
session_start();

if(!empty($_GET['ok']))
{
    if (!isset($_SESSION['prenom']))
     {
        $_SESSION['prenom'] = array();
        
    }
    array_push($_SESSION['prenom'],$_GET['prenom']);
    print_r($_SESSION['prenom']);
    
    
}

if(!empty($_GET['supp']))
{
    unset($_SESSION['prenom']);
    

}

?>



