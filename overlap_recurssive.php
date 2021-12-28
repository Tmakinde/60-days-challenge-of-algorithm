<?php
//commonlounge task
function checkOverlap($array){
	
	$checker = false;
	$n = 0;
	$lengthArray= count($array);
	
	if ($lengthArray < 2) {
		return null;
	}

	while ($n < $lengthArray-1 && !$checker){
		$sliceArray = array_slice($array, $n);
		
		

		for ($i=0; $i < count($sliceArray)-1; $i++) { 
			
			if (($array[$i][0] == $array[$i][1]) || ($array[$i+1][0] == $array[$i+1][1])){
				
				$checker = true;
			}elseif(($array[$i][0] > $array[$i+1][0] && $array[$i][1] > $array[$i+1][1]) || ($array[$i][0] < $array[$i+1][0] && $array[$i][1] < $array[$i+1][1])) {
				
				$checker = false;
			}else{
				
				$checker = true;
			}
		}

		if ($checker) {
			break;
		}
		$n++;
	}
	return printResult($checker);

}
// 3,4  5,6
function checkerArray($array, $i, $checker){
	
	if (($array[$i][0] == $array[$i][1]) || ($array[$i+1][0] == $array[$i+1][1])){
				
		$checker = true;
	}elseif(($array[$i][0] > $array[$i+1][0] && $array[$i][1] > $array[$i+1][1]) || ($array[$i][0] < $array[$i+1][0] && $array[$i][1] < $array[$i+1][1])) {
		
		$checker = false;
	}else{
		
		$checker = true;
	}

}

function printResult($checker){
	if ($checker == true) {
		print "no";
	}else{
		print "yes";
	}
}

print(checkOverlap([[1,3], [7,7], [4,6]]));