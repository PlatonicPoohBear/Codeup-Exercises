<?php

function add($a, $b) {
   
    if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
    } else {
    	throwErrorMessage();
    }
}

function subtract($a, $b) {
    
    if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
    } else {
    	throwErrorMessage();
    }
}

function multiply($a, $b) { 
    
    if (is_numeric($a) && is_numeric($b)) {
    	
    	if ($b == 0) {
    		return 0;
    	} elseif ($b == 1) {
    		return $a;
    	} else {
    		return $a + multiply($a, $b - 1);
    	}

    } else {
    	throwErrorMessage();
    }
}

function divide($a, $b) {
    
    if (is_numeric($a) && is_numeric($b)) {
    	
    	if ($b == 0) {
    		echo "Cannot divide by zero." . PHP_EOL;
    	} else {
    		
    		if ($a == $b) {
    			return 1;
    		} elseif ($a < $b) {
    			return 0;
    		} else {
    			return 1 + divide($a - $b, $b);
    		}
    	}
   
    } else {
    	throwErrorMessage();
    }
}

function modulus($a, $b) {
    
    if (is_numeric($a) && is_numeric($b)) {
    	
    	if ($b == 0) {
    		echo "Cannot divide by zero." . PHP_EOL;
    	} else {
    		return $a % $b;
    	}
    
    } else {
    	throwErrorMessage();
    }
}

function throwErrorMessage() {
	echo "Invalid arguments." . PHP_EOL;
}


fwrite(STDOUT, "Enter valid number: ");

$input1 = trim(fgets(STDIN));

echo PHP_EOL;

fwrite(STDOUT, "Enter another valid number: ");

$input2 = trim(fgets(STDIN));



echo add($input1, $input2) . PHP_EOL;

echo subtract($input1, $input2) . PHP_EOL;

echo multiply($input1, $input2) . PHP_EOL;

echo divide($input1, $input2) . PHP_EOL;

echo modulus($input1, $input2) . PHP_EOL;
