<?php
/*
$alpha = range('A', 'Z');
for ($i = 0; $i < 7; $i++) {
    for ($j = 7; $j > $i; $i--) {
        echo $alpha[$i];
    }
    echo "<br>";
}
*/

for($i=65; $i<=69;$i++){
    for($j=5;$j>=$i-64;$j--){
        echo chr($i);
    }
    echo"<br>";
}