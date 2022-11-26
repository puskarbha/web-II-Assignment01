<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=15;
   $sum=0;
   $is_prime=false;
    for($i=2;$i<=$num;$i++)
    {
        $is_prime=True;
        for($j=2;$j<$i;$j++)
        {  
            if($i%$j==0)
            {
                $is_prime=false;
                break;
            }
        }


        if($is_prime)
        {
            echo $i."<br>";
            $sum+=$i;

        }
    }
   echo" The sum of prime numbers given above is " .$sum;
    ?>
</body>
</html>