<?php
$n = 10;
for($i = $n; $i  >= 1; --$i )
{
    for($k = 0; $k < $n - $i ; ++$k)
        echo ("-"); 

    for($j=$i; $j <= 2* $i - 1; ++$j)
        echo ("$i ");  
    echo ("<br>"); 
}
for ($i=2; $i <=$n ; $i++) { 
    for ($k= $n; $k > $i ; $k--) 
        echo ("-");
    for ($j=1; $j <=$i ; $j++) { 
        echo $i." ";
    }
    echo "<br>";
}