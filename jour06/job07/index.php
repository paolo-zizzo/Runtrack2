<?php
function bubblesort($tab,$croissant)
{
    if ($croissant==true)
    {
        asort($tab);
        foreach ($tab as $key=>$val)
        {
            echo "$val\n";
        }
        
    }
    else{
        arsort($tab);
        foreach ($tab as $key=>$val)
        {
            echo "$val\n";
        }
    }
}

$tab=array("abc", "ghi", "def");
$croissant=true;
bubblesort($tab,$croissant)




?>