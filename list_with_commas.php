<?php 

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


function humanizedList($string, $sortFlag = false) {
	$array = explode(', ', $string);

	if ($sortFlag === true) {
		sort($array);
	}

	$lastIndex = count($array) - 1;
	$array[$lastIndex] = "and " . $array[$lastIndex];
	$newString = implode(', ', $array);
	return $newString;
}


$famousFakePhysicists = humanizedList($physicistsString, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 ?>