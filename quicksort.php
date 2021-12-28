<?php
//sort array
function partition(&$array, $low, $high){
	$i = $low; //pointer

	$pivot = $array[$high];
	
	for ($j=$low; $j < $high; $j++) { 
		// check if value is less than pivot
		if ($array[$j] < $pivot) {
			
			swap($array, $j, $i);
			$i++;
		}
	}

	swap($array, $i, $high);

	return $i;
}

function swap(&$array, $index1, $index2){
	
	[$array[$index2], $array[$index1]] = [$array[$index1], $array[$index2]];
}

function quickSort(&$array, $low, $high){
	if ($low < $high) {
		$pivot = partition($array, $low, $high);

		quickSort($array, $low, $pivot-1); // before pivot
		quickSort($array, $pivot+1, $high); // after pivot
	}
	
}

$array = [295, 378, 421, 458, 479, 687, 840, 922, 945];

quickSort($array, 0, count($array)-1);

print_r($array);
