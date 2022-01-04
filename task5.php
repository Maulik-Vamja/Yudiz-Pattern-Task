<?php
$n=10;
for ($i=1; $i <=$n ; $i++) {
    if($i%2 == 0){
        continue;
    }
    for ($k= $n; $k > $i ; $k--) 
        echo ("&nbsp;");
    for ($j=1; $j <=$i ; $j++) { 
        echo " * ";
    }
    echo "<br>";
}