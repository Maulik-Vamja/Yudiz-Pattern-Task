<?php
$n = 20;
for ($i=1; $i <= $n ; $i++) { 
    for ($j=1; $j <= $n; $j++) { 
        if($j <$i)
            echo ("&nbsp;");
        else
            echo "$j";
    }
    echo "<br>";
}
