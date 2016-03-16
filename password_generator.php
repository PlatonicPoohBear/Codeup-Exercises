<?php 



	// Don't build one array based on user input, but build one for each set of characters per user instructions,
	// then randomly combine them.

function master() {

	fwrite(STDOUT, 'How long will your password be? ');

	$lengthInput = trim(fgets(STDIN));

		// Set length variable
	$length = $lengthInput;



		// Set array of special characters (if within limit of length variable)
	
	var_dump(getSpecial());
		


	// fwrite(STDOUT, 'How many digits will your password contain? ');

	// $digitInput = trim(fgets(STDIN));


		// Set array of digits (if within limit of length variable)

	
	fwrite(STDOUT, 'Your password will contain letters. Would you like upper case letters as well? Yes or no. ');

	$includeUpperCaseInput = trim(fgets(STDIN));


		// If "Yes", go to the next question. Else, set array of lower case letters (if any space remains)

	
	fwrite(STDOUT, 'Would you like exclusively upper case letters? Yes or no. ');

	$exclusiveUpperCaseInput = trim(fgets(STDIN));


		// If "Yes", set array of upper case letters. Else, set array of lower and upper case letters.





	// Merge all of the arrays randomly to produce password.



}


function getSpecial() {

	fwrite(STDOUT, 'How many special characters will your password contain? ');

	$specialInput = trim(fgets(STDIN));

	if (is_numeric($specialInput)) {
		return $specialInput;
	} else {
		getSpecial();
	}
}


function getDigit() {

	fwrite(STDOUT, 'How many digits will your password contain? ');

	$digitInput = trim(fgets(STDIN));

	if (is_numeric($digitInput)) {
		return $digitInput;
	} else {
		getDigit();
	}
}


function getIncludeUpperCase() {

	
}

master();


 	
 ?>