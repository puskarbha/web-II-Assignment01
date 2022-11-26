
    <?php
        $num=371;
        $i=$num;
        $sum=0;
        while($i!=0){
            $x=$i%10;
            $sum+=$x*$x*$x;
            $i=$i/10;
        }

        if($num==$sum){
            echo $num." is a armstrong number";
        }
        else{
            echo $num." is not xa armstrong number";
        }
    ?>
