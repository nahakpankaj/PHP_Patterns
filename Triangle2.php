<?php

$alpha = range('A','z');

for($i=0;$i<50;$i++){
    for($j=0;$j<=$i; $j++){
        echo $alpha[$i];
    }
    echo "<br>";
}