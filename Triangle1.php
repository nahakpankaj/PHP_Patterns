<?php
$l = 1;

foreach(range('A','Z')as $char){
    for($i=26;$i>=$l;$i--){
        echo $char;
    }
    echo "<br>";
    $l=$l+1;
}