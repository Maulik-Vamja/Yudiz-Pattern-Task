<?php
$n = 5;
$counter = 1;
for ($i=1; $i <=$n ; $i++) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo $counter++ ;
    }
    echo "<br>";
}