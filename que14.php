<?php
    $num=12;
    $factorial=1;
    if($num==0){
        $factorial=0;
    }
    else{
        for($i=1;$i<=$num;$i++){
            $factorial=$factorial*$i;
        }
    }
    
    echo $factorial;
?>