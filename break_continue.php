<?php 

for ($i=1; $i <= 100; $i++) { 
	
	if ($i % 2 != 0) {
		continue;
	}

	echo "$i\n";

	for ($x=1; $x <= 100; $x++) { 
		echo "$x\n";

		if ($x >= 10) {
			break;
		}
	}
}
 ?>