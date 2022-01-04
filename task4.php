<?php
$n = 10;
for ($i=1; $i <= $n ; $i++) { 
    for ($j=1; $j <= $n; $j++) { 
        if($j < $i)
            echo ("&nbsp;");
        else
            echo " * ";
    }
    echo "<br>";
}
