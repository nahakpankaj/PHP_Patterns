<?php
$alpha = range('A','z');
for($i=0;$i<26;$i++){
    for($j=0;$j<=$i;$j++){
        echo $alpha[$j];
    }
    echo "<br>";
}