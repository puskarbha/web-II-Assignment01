<?php
$text="patanacademy";
$char="a";
$count="0";
for($x=0; $x< strlen($text); $x++)
  { 
    
    if(substr($text,$x,1)==$char)
    {
    $count=$count+1;
	 }
  }
echo "The number of 'a' in givn string $text is $count";
?>