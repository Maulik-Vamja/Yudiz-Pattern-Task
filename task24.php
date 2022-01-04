<?php
$n=5;
for($i=1; $i<=$n; $i++)
{
 for($j=1; $j<=$n; $j++)
 {
  if($j<=$i)
   echo $j;
  else
   echo "&nbsp;&nbsp;&nbsp; ";
 }
 for($k=$n; $k>=1; $k--)
 {
  if($k > $i)
   echo " ";
  else
   echo $k;
 }
 echo "<br>";
}
?>
