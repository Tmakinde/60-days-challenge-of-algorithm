<?php
//sort array
//[2,4,7,8] [3,8,10,22]
//che
function merge_sort(array $array){
	$arrayLength= count($array);
	$half = round($arrayLength/2);

	return merge(array_slice($array, 0, $half), array_slice($array, $half));
}

function merge($left, $right){
	$i = 0;
	$j = 0;
	$array = [];
	while($i < count($left) && $j < count($right)){

		if ($left[$i] < $right[$j]) {
			array_push($array, $left[$i]);
			$i++;
		}else{
			array_push($array, $right[$j]);
			$j++;
		}
	}
	// push remaining array of the unexhausted array to $array
	while($j < count($right)){
		array_push($array, $right[$j]);
		$j++;
	}

	while($i < count($left)){
		array_push($array, $left[$i]);
		$i++;
	}

	return $array;
}

print_r(merge([22,43,59], [0, 45, 60]));