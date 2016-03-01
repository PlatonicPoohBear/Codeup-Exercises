<?php

function A($num) {
    $num -= 1;
    if($num > 0) {	
        echo "A is Calling B($num)\n";
        $num = B($num);
    }
    return $num;
}

function B($num) {
    $num -= 2;
    if($num > 0) {
        echo "B is Calling A($num)\n";
        $num = A($num);
    }
    return $num;
}

$num = 4;
echo "Calling A($num)\n";
echo 'Result: ' . A($num);