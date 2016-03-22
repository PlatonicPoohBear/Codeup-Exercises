<?php 



function master() {


	$masterLength = getMasterLength();


// ----------------------------------------------------------------------------------------------------------------------

	
	if ($masterLength > 0) {
		
		$specialLength = getSpecial($masterLength);
		
		$specialArray = createSpecial($specialLength);
		
		$masterLength -= $specialLength;
	} else {
		$specialArray = [];
	}


// ----------------------------------------------------------------------------------------------------------------------

		
	if ($masterLength > 0) {
	
		$digitLength = getDigit($masterLength);
		
		$digitArray = createDigit($digitLength);

		$masterLength -= $digitLength;
	} else {
		$digitArray = [];
	}


// ----------------------------------------------------------------------------------------------------------------------

	
	if ($masterLength > 0) {
			
		$includeUpperCaseInput = getIncludeUpperCase();

		if ($includeUpperCaseInput == true) {
			
			$exclusiveUpperCaseInput = getExclusiveUpperCase();

			if ($exclusiveUpperCaseInput == true) {
				$upperCaseArray = createUpperCase($masterLength);
				
				return mergeArrays($specialArray, $digitArray, $upperCaseArray);
			} else {
				$lowerUpperCaseArray = createLowerUpperCase($masterLength);
				
				return mergeArrays($specialArray, $digitArray, $lowerUpperCaseArray);
			}

		} else {
			$lowerCaseArray = createLowerCase($masterLength);
			
			return mergeArrays($specialArray, $digitArray, $lowerCaseArray);
		}
		
	} else {
		return mergeArrays($specialArray, $digitArray);
	}



}


function getMasterLength() {

	fwrite(STDOUT, PHP_EOL . 'How long will your password be? ');

	$lengthInput = trim(fgets(STDIN));

	if (is_numeric($lengthInput)) {
		return floor(intval($lengthInput));
	} else {
		return getMasterLength();
	}
}



function getSpecial($masterLength) {

	fwrite(STDOUT, PHP_EOL . 'How many special characters will your password contain? ');

	$specialInput = trim(fgets(STDIN));

	if (is_numeric($specialInput) && floor(intval($specialInput) <= $masterLength)) {
		return floor(intval($specialInput));
	} else {
		return getSpecial($masterLength);
	}
}


function getDigit($masterLength) {

	fwrite(STDOUT, PHP_EOL . 'How many digits will your password contain? ');

	$digitInput = trim(fgets(STDIN));

	if (is_numeric($digitInput) && floor(intval($digitInput) <= $masterLength)) {
		return floor(intval($digitInput));
	} else {
		return getDigit($masterLength);
	}
}


function getIncludeUpperCase() {

	fwrite(STDOUT, PHP_EOL . 'Your password will contain letters. Would you like upper case letters as well? Yes or no. ');

	$includeUpperCaseInput = trim(fgets(STDIN));

	if ($includeUpperCaseInput == 'Yes' || $includeUpperCaseInput == 'yes' || $includeUpperCaseInput == 'YES') {
		return true;
	} elseif ($includeUpperCaseInput == 'No' || $includeUpperCaseInput == 'no' || $includeUpperCaseInput == 'NO') {
		return false;
	} else {
		return getIncludeUpperCase();
	}
}

function getExclusiveUpperCase() {

	fwrite(STDOUT, PHP_EOL . 'Would you like exclusively upper case letters? Yes or no. ');

	$exclusiveUpperCaseInput = trim(fgets(STDIN));

	if ($exclusiveUpperCaseInput == 'Yes' || $exclusiveUpperCaseInput == 'yes' || $exclusiveUpperCaseInput == 'YES') {
		return true;
	} elseif ($exclusiveUpperCaseInput == 'No' || $exclusiveUpperCaseInput == 'no' || $exclusiveUpperCaseInput == 'NO') {
		return false;
	} else {
		return getExclusiveUpperCase();
	}
}


function createSpecial($specialLength) {

	$characterSet = ['!', '@', '#', '$', '%', '^', '&', '*', '-', '_', '=', '+', '`', '~', '<', ',', '>', '.', '?', '/', ';', ':', '|', '\\'];
	$specialArray = [];

	for ($i = $specialLength; $i > 0; $i--) {
		$specialArray[] = $characterSet[mt_rand(0, count($characterSet) - 1)];
	}

	return $specialArray;
}


function createDigit($digitLength) {

	$digitSet = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	$digitArray = [];

	for ($i = $digitLength; $i > 0; $i--) {
		$digitArray[] = $digitSet[mt_rand(0, count($digitSet) - 1)];
	}

	return $digitArray;
}


function createUpperCase($masterLength) {
	$upperCaseSet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
	$upperCaseArray = [];

	for ($i = $masterLength; $i > 0; $i--) {
		$upperCaseArray[] = $upperCaseSet[mt_rand(0, count($upperCaseSet) - 1)];
	}

	return $upperCaseArray;
}


function createLowerUpperCase($masterLength) {
	$lowerUpperCaseSet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
	$lowerUpperCaseArray = [];

	for ($i = $masterLength; $i > 0; $i--) {
		$lowerUpperCaseArray[] = $lowerUpperCaseSet[mt_rand(0, count($lowerUpperCaseSet) - 1)];
	}

	return $lowerUpperCaseArray;
}


function createLowerCase($masterLength) {
	$lowerCaseSet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
	$lowerCaseArray = [];

	for ($i = $masterLength; $i > 0; $i--) {
		$lowerCaseArray[] = $lowerCaseSet[mt_rand(0, count($lowerCaseSet) - 1)];
	}

	return $lowerCaseArray;
}


function mergeArrays($specialArray, $digitArray, $letterArray = []) {
	$passwordArray = array_merge($specialArray, $digitArray, $letterArray);
	
	shuffle($passwordArray);
	shuffle($passwordArray);
	shuffle($passwordArray);

	$password = implode($passwordArray);

	return $password;

}


echo PHP_EOL . 'Your password is: ' . master() . PHP_EOL;


 	
 ?>