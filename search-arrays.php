<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function search_arrays($needle, $haystack) {
	$result = array_search($needle, $haystack, true);

	if ($result === false) {
		return "FALSE";
	} else {
		return "TRUE";
	}
}


function compareArrays($firstArray, $secondArray) {

	$counter = 0;

	foreach ($firstArray as $key => $value) {
		$result = array_search($value, $secondArray);

		if ($result !== false) {
			$counter++;
		}
	}

	return $counter;
}


// echo search_arrays('Tina', $names) . PHP_EOL; 

// echo search_arrays('Bob', $names) . PHP_EOL; 


var_dump(compareArrays($names, $compare));