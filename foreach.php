<?php 


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $element) {

	if (is_array($element)) {
		echo "Array" . PHP_EOL;

		foreach ($element as $nested_element) {
			echo "\t$nested_element" . PHP_EOL;
		}

	} else {
		echo "$element" . PHP_EOL;
	}
}


 ?>