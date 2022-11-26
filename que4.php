<?php

if(isset($_POST['submit']))
{
    $a=$_POST['first'];
    $b=$_POST['second'];
    $c=$_POST['third'];

$a *= $a;
$b *= $b;
$c *= $c;
if($a + $b == $c || $a + $c == $b || $b + $c == $a){
    echo "This is a right angled triangle\n";
}
else
{
    echo "This is not a right angled Triangle";
    }

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
<body>
    <form action="" method="post">
     First side: <input type="text"  name='first'>
     Second side: <input type="text"  name='second'>
     Third side: <input type="text"  name='third'>


<input type="submit" name="submit">
    </form>
</body>

