<?php
$n=5;
for ($i=1; $i <=$n ; $i++) { 
    for ($k= $n; $k > $i ; $k--) 
        echo ("&nbsp");
    for ($j=1; $j <=$i ; $j++) { 
        echo " ".$i." ";
    }
    echo "<br>";
}