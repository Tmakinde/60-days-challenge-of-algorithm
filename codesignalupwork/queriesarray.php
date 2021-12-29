<?php
//sort array
function getMaxString($array){
	$lengthArray = array_map('strlen', $array);	

	return max($lengthArray);
}
//check if the queries are subsequent values in array
function checkQueries($array, $queries){
	
	$result = [];

	for ($i=0; $i < count($queries); $i++) { 
		
		if (elementInArray($array, $queries[$i]) == true) {
			$result[] = 0;
		}else{
			$result[] = 1;
		}
	}

	return $result;
}

function elementInArray($array, $queryArray){
	$checker = false;
	$counter = count($queryArray) -2; //because small array in slice query array must be two
	
	for ($i=0; $i < $counter; $i++) { 
		
		$sizeOfSliceArrayToLoop = count(array_slice($queryArray, $i))-1;
		for ($j=0; $j < $sizeOfSliceArrayToLoop; $j++) { 
		
			if (array_search($queryArray[$j], $array) >= array_search($queryArray[$j+1], $array)) {
				$checker =  true;
				break;
			}
		}

		if ($checker == true){
			break;
		}
	}

	return $checker;

}

print_r(checkQueries([1,2,3,4,5], [[1,2,3], [2,4,3], [1,1,1], [2,3,4]]));