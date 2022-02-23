<?php
echo "Star Triangle";
for ($i = 0; $i <= 5; $i++) {
    for ($j = 5; $j >= $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($j = 5; $j >= $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br> ";
}
