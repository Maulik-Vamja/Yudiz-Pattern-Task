<?php
$n=10;
for ($i=1; $i <=$n ; $i++) { 
    for ($k= $n; $k > $i ; $k--) 
        echo ("&nbsp;&nbsp;");
    for ($j=1; $j <=$i ; $j++) { 
        echo $j;
    }
    for ($j=$i-1; $j >=1 ; $j--) { 
        echo $j;
    }

    echo "<br>";
}