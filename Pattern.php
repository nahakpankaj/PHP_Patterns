<?php
$a = range('A','Z');
for($i=7; $i>=1;$i--){
    for($j=0; $j<=$i; $j++){
        echo '';
    }
    $j--;
    for($k=0;$k<=(7-$j); $k++){
        echo $a[$k];
    }
    echo"<br>\n";
}