<?php 

for ($i=1; $i <= 100; $i++) { 
	
	if ($i % 5 == 0 && $i % 3 == 0) {
		echo "FizzBuzz\n";
		continue;
	} elseif ($i % 5 == 0) {
		echo "Buzz\n";
		continue;
	} elseif ($i % 3 == 0) {
		echo "Fizz\n";
		continue;
	} else {
		echo "$i\n";
	}
	
}
 ?>