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
		

			// This line of code is converting large numbers into scientific notation. Needs to be corrected.
		$input = round(floatval($input));


		
		$input = strval($input);
		return sum($input);
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