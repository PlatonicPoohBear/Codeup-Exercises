<?php 

function sum($input) {

	if (count($input) == 0) {
		return 0;
	} else {
		$temp = array_pop($input);
		$temp = (int) $temp;
		return $temp + sum($input);
	}
}

function validate($input) {
	
	if (is_numeric($input)) {
		

			// This code will work, but with larger numbers the computer starts doing some funny
			// float math. To fix this, I think I instead need to grab the input as the string,
			// then split it into an array of single character strings (if the input was numeric).
			// Since all of the characters can only be numeric values 
			// (because of the "is_numeric" check and the trim() on the input string),
			// I can simply traverse the array and add each string value to a sum variable as its int value.
			// If and when a "." is reached in the array, I can check the value of the string in the next index
			// and return either a 1 or a 0 accordingly to simulate rounding. That should all result in a sum,
			// without ever needing to actually deal with float values.

		// $input = floatval($input);
		// $input = round($input);
		// $input = rtrim(sprintf('%100f', $input), '0');
		// $input = strval($input);
		// $input = str_split($input);
		
		// return sum($input);

	} else {
		return receive();
	}
}

function receive() {
	
	fwrite(STDOUT, 'Please input an integer.' . PHP_EOL);

	$input = trim(fgets(STDIN));

	return validate($input);
}

var_dump(receive());
 
 ?>