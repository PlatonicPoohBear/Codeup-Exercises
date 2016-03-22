<?php 

function sum($input) {

	if (count($input) == 0) {
		return 0;
	} else {
		$temp = array_shift($input);
		
		if ($temp == ".") {
				// check the next index (to round)
			$decimal = $input[0];
				// return either a 1 or a 0
			if (intval($decimal) > 4) {
				return 1;
			} else {
				return 0;
			}
			
		} else {
			$temp = (int) $temp;
			return $temp + sum($input);	
		}
		
		
	}
}

function validate($input) {
	
	if (is_numeric($input)) {
		
		$input = str_split($input);
		
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