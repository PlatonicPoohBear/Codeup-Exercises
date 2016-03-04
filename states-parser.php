<?php 

	function stateParser($filename)	 {

		$handle = fopen($filename, 'r');
	    $contents = fread($handle, filesize($filename));
	    $dataArray = explode("\n", $contents);
	    fclose($handle);

	    $newArray = [];

	    foreach ($dataArray as $key => $value) {
	    	$temp = [];
	    	$temp = explode(',', $value);
	    	$temp = organize($temp);
	    	array_push($newArray, $temp);

	    }

	    return $newArray;
	}


	function organize($inputArray) {
		$returnArray = [];
		$returnArray[$inputArray[0]] = $inputArray[1];
		return $returnArray;
	}


	print_r(stateParser("states.csv"));

	    

 ?>