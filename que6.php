
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="" method="post">
  First number: <input type="text" name="num1">
  Second number: <input type="text" name="num2">
   <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    
    echo"Before swapping"."<br>";
    echo"The first number is ". $num1 ."<br>";
    echo"The second number is ".$num2."<br>";
    
    $temp=$num1;
    $num1=$num2;
    $num2=$temp;

    echo"After swapping"."<br>";
    echo"The first number is ".$num1."<br>";
    echo"The second number is ".$num2."<br>";
  
}
?>
</body>

</html>