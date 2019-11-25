<?php
 function affichePremiers($n){
   
   
    for($i=2;$i<=$n;$i++){
        $nbDiv = 0;  
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
                $nbDiv++;            
            }
        }
        if($nbDiv == 2){
 echo "</br>";
            
            echo $i;
        }
    }
}
affichePremiers(1000)
?>


                        



