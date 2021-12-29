<?php
//sort array
function getMaxString($array){
	$lengthArray = array_map('strlen', $array);	

	return max($lengthArray);
}
//append charaxter in each pos
function appendString($array){

	$string = '';
	$row = getMaxString($array);
	// loop using the max string in the array
	for ($i=0; $i < $row; $i++) { 
		// loop array
		for ($j=0; $j < count($array); $j++) { 
			
			if (isset($array[$j][$i]) == 1) {
				$value = $array[$j][$i];
				$string.=$value;
			}
			
		}
	}

	return $string;
}

print(appendString(['Daisy', 'Rose', 'Hyacinth', 'Poppy']));
