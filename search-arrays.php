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


echo search_arrays('Tina', $names) . PHP_EOL; 

echo search_arrays('Bob', $names) . PHP_EOL; 