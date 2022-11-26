
    <?php
        $num=371;
        $i=$num;
        $sum=0;
        while($i!=0){
            $x=$i%10;
            $sum+=$x;
            $i=$i/10;
        }

        echo "The sum of digits of given number ".$num." is ". $sum;
    ?>
