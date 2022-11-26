<?php
if(isset($_POST['submit'])){
    $num=$_POST['num'];

   $result=($num<30)?($num<20?($num<=10?"number less than or equals 10":"num greater than 10"):"greater than 20"):"greater than 30";
   echo $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method="post">
   Input the number: <input type="text" name="num">
   <input type="submit" name="submit">
</form>
<body>
    
</body>
</html>