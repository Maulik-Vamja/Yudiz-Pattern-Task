<?php
$n=5;
$alpha = 65;
for ($i=1; $i <=$n ; $i++) { 
    for ($k= $n; $k > $i ; $k--) 
        echo "-";
    for ($j=1; $j <=$i ; $j++) { 
        echo " ".chr($alpha)." ";
    }
    $alpha++;
    echo "<br>";
}