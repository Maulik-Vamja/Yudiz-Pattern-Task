<?php
$n = 5;
for($i = $n; $i  >= 1; --$i )
{
    for($k = 0; $k < $n - $i ; ++$k)
        echo ("&nbsp;"); 

    for($j=$i; $j <= 2* $i - 1; ++$j)
        echo ("$i ");  
    echo ("<br>"); 
}