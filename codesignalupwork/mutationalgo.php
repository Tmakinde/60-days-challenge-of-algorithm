<?php
//sort array
function mutateArray(array $array){
	//loop through array
	$b = [];
	for($i =0;$i < count($array);$i++){
		
		$first = $i - 1 < 0 ? 0 : $array[$i-1];
		$last = $i + 1 == count($array) ? 0 : $array[$i+1];
		$y = $i;

		$z = $i + 1;
		$b[] = $first + $array[$y] + $last;
	}

	return $b;
}

print_r(mutateArray([4,0,1,-2,3]));
