<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Talbot', 'Brock', 'Matt'];



function combineArrays($newArray, $firstArray, $secondArray) {
	
	while (!empty($firstArray) && !empty($secondArray)) {
		
		$element1 = array_shift($firstArray);
		$element2 = array_shift($secondArray);

		if ($element1 == $element2) {
			array_push($newArray, $element1);
		} else {
			array_push($newArray, $element1, $element2);
		}
	
		
	}

	while (!empty($firstArray) && empty($secondArray)){
	
		$element1 = array_shift($firstArray);

		array_push($newArray, $element1);
	}

	while (empty($firstArray) && !empty($secondArray)){
	
		$element2 = array_shift($secondArray);

		array_push($newArray, $element2);
	}

	if (empty($firstArray) && empty($secondArray)) {
		return $newArray;
	}
}

$newArray = [];

print_r(combineArrays($newArray, $names, $compare));

