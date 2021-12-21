<?php
//binary search

function binary_search(array $array, $number){
	if(count($array) == 0){
    	return "yes";
    } 
    
    if(count($array) == 1){
    	if($number == $array[0]){
        	return $number;
        }
    	return "not found";
    };
    
    $pos = round(count($array)/2);
    
    if($array[$pos] > $number){
    
    	return binary_search(array_slice($array, 0, $pos), $number);
        
    }else{
    
    	return binary_search(array_slice($array, $pos), $number);
    }

}
//print(count([]));
print(binary_search([2,3,4,13, 15, 16], 16));