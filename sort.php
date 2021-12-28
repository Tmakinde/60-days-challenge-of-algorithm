<?php
//sort array
function sortArray(array $array){
//loop through array

	for ($i=0; $i < count($array); $i++) { 
		
		for ($j=0; $j < count($array); $j++) { 
			
			if ($array[$j] > $array[$i]) {
				$valueJ = $array[$j];
				$valueI = $array[$i];
				//swap array index
				$array[$i] = $valueJ;
				$array[$j] = $valueI;
			}
			
		}
		
	}
	return $array;
}

print_r(sortArray([458,687,945,378,479,421,33,295,922,840]));
